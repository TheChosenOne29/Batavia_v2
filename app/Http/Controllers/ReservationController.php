<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/reservation/index', [
            'active' => 'Index2',
            'dataReservation' => Reservation::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('/admin/reservation/add', [
            'active' => 'Add2',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Reservation::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'guest' => $request -> guest,
            'date' => $request -> date,
            'time' => $request -> time
        ]);
        
        return redirect('/admin/reservation/index');
    }

    public function userstore(Request $request)
    {
        Reservation::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'phone' => $request -> phone,
            'guest' => $request -> guest,
            'date' => $request -> date,
            'time' => $request -> time
        ]);
        
        return redirect('/#reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function erase($id)
    {
        Reservation::destroy($id);

        return redirect('/admin/reservation/index');
    }
}
