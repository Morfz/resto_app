<?php

namespace App\Http\Controllers\Admin;

use App\Enums\TableStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;
use Carbon\Carbon;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('admin.reservations.create', compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $table = Table::findOrfail($request->table_id);
        if ($request->guests > $table->capacity) {
            return back()->with('warning', 'Guests are more than table capacity');
        }
        $request_date = Carbon::parse($request->date);
        foreach ($table->reservation as $res) {
            if (($res->date)->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }
        
        Reservation::create($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $tables = Table::where('status', TableStatus::Available)->get();
        return view('admin.reservations.edit', compact('reservation', 'tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationStoreRequest $request, Reservation $reservation)
    {
        $table = Table::findOrfail($request->table_id);
        if ($request->guests > $table->capacity) {
            return back()->with('warning', 'Guests are more than table capacity');
        }
        $request_date = Carbon::parse($request->date);
        $reservation = $table->reservation()->where('id', '!=', $reservation->id)->get();
        foreach ($reservation as $res) {
            if (($res->date)->format('Y-m-d') == $request_date->format('Y-m-d')) {
                return back()->with('warning', 'This table is reserved for this date.');
            }
        }
        
        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'guests' => 'required',
        ]);

        $table->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'guests' => $request->guests,
        ]);

        // $reservation->update($request->validated());

        return to_route('admin.reservations.index')->with('success', 'Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservations.index')->with('success', 'Reservation deleted successfully');
    }
}
