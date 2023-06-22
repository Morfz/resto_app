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
    public function index(Request $request)
    {
        $reservation = $request->session()->get('reservation');
        $min_date = Carbon::today();
        $max_date = Carbon::today()->addWeek();
        return view('reservations.index', compact('reservation', 'min_date', 'max_date'));
    }

    public function store(Request $request)
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
}
