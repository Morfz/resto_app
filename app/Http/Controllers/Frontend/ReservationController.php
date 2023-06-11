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
    public function stepOne()
    {
        return view('reservations.step-one');
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
