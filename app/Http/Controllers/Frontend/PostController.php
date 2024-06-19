<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Save Reservation Function
    public function savereservation(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        // Save Record into Reservations DB
        $reservation = new Reservation();
        $reservation->name = $request->input('name');
        $reservation->email = $request->input('email');
        $reservation->phone = $request->input('phone');
        $reservation->check_in = $request->input('check_in');
        $reservation->check_out = $request->input('check_out');
        $reservation->status = 1;
        $reservation->save();

        \Session::flash('Success_message', 'Reservation Made Successfully, We will reach out to your shortly ');

        return back();
    }
}
