<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Enums\TableStatus;
use Carbon\Carbon;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function stepOne(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::today()->addWeek();
        return view('reservations.step-one', compact('reservation', 'min_date', 'max_date'));
    }

    public function storeStepOne(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'date' => ['required', 'date', new DateBetween, new TimeBetween],
            'guests' => ['required'],
        ]);
        
        if(empty($request->session()->get('reservation'))){
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        } else {
            $reservation = $request->session()->get('reservation');
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
        }

        return to_route('reservations.step.two');
    }

    public function stepTwo(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        // $res_table_ids = Reservation::orderBy('date')
        // ->get()
        // ->filter(function($value) use ($reservation) {
        //     return $value->date->format('Y-m-d') == $reservation->date->format('Y-m-d') && 
        //         $value->date->format('H:i:s') <= $reservation->date->addHour()->format('H:i:s');
        // })
        // ->pluck('table_id');
        $res_table_ids = Reservation::orderBy('date')
        ->get()
        ->filter(function($value) use ($reservation) {
            $oneHourAfter = $reservation->date->copy()->addHour();
    
            return $value->date->format('Y-m-d') == $reservation->date->format('Y-m-d') &&
                ($value->date->greaterThanOrEqualTo($reservation->date) &&
                $value->date->lessThan($oneHourAfter) ||
                $reservation->date->greaterThan($value->date) &&
                $reservation->date->lessThanOrEqualTo($value->date->copy()->addHour()));
        })
        ->pluck('table_id');
    
        $tables = Table::where('status', TableStatus::Available)
                ->where('capacity', '>=', $reservation->guests)
                ->whereNotIn('id', $res_table_ids)->get();
        return view('reservations.step-two', compact('reservation', 'tables'));
    }

    public function storeStepTwo(Request $request)
    {
        $validated = $request->validate([
            'table_id' => ['required'],
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('welcome')->with('success', 'Telah Berhasil Membuat Reservasi');
    }

    public function index(Request $request)
    {
        $min_date = Carbon::today();
        $max_date = Carbon::today()->addWeek();
        $tables = Table::where('status', TableStatus::Available)->get();
        $reservation = $request->session()->get('reservation');
        return view('reservations.index', compact('reservation', 'tables', 'min_date', 'max_date'));
    }

    public function store(Request $request){
        $table = Table::findOrfail($request->table_id);
        if ($request->guests > $table->capacity) {
            return back()->with('warning', 'Guests are more than table capacity');
        }
        $request_date = Carbon::parse($request->date);
        foreach ($table->reservation as $res) {
            $time_start = Carbon::parse($res->date->format('Y-m-d H:i:s'));
            $time_end = Carbon::parse($res->date->format('Y-m-d H:i:s'))->addHour();
            if (($request_date->between($time_start, $time_end)) || ($request_date->eq($time_start) || $request_date->eq($time_end))) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }
        
        Reservation::create($request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'date' => ['required', 'date', new DateBetween, new TimeBetween],
            'guests' => ['required'],
            'table_id' => ['required'],
        ]));

        return to_route('reservations.index')->with('success', 'Reservation created successfully');
    }
}
