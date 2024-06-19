<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminPostController extends Controller
{
    // Save Guest Function
    public function saveguest(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:guests',
            'phone' => 'required',
        ]);

        // Save Record into Guests DB
        $guest = new Guest();
        $guest->name = $request->input('name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->status = 1;
        $guest->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Guest');

        return back();
    }

    // Update Guest function
    public function updateguest(Request $request, $id)
    {
        $guest = Guest::find($id);

        // Validation
        $this->validate($request, array(
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ));

        $guest->name = $request->input('name');
        $guest->email = $request->input('email');
        $guest->phone = $request->input('phone');
        $guest->status = 1;

        $guest->save();

        \Session::flash('Success_message', '✔ Guest Updated Successfully');

        return back();
    }

    // Delete Guest Function
    public function deleteguest($id)
    {

        $guest = Guest::where('id', $id)->findOrFail($id);
        $guest->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Guest');

        return back();
    }


    // Save Room Function
    public function saveroom(Request $request)
    {
        // Validation
        $this->validate($request, [
            'number' => 'required',
            'type' => 'required',
            'rate' => 'required',
        ]);

        // Save Record into Rooms DB
        $room = new Room();
        $room->number = $request->input('number');
        $room->type = $request->input('type');
        $room->rate = $request->input('rate');
        $room->status = 1;
        $room->save();

        \Session::flash('Success_message', 'You Have Successfully Added a Room');

        return back();
    }

    // Update Room function
    public function updateroom(Request $request, $id)
    {
        $room = Room::find($id);

        // Validation
        $this->validate($request, array(
            'number' => 'required',
            'type' => 'required',
            'rate' => 'required',
        ));

        $room->number = $request->input('number');
        $room->type = $request->input('type');
        $room->rate = $request->input('rate');
        $room->status = 1;

        $room->save();

        \Session::flash('Success_message', '✔ Room Updated Successfully');

        return back();
    }

    // Delete Room Function
    public function deleteroom($id)
    {

        $room = Room::where('id', $id)->findOrFail($id);
        $room->delete();

        \Session::flash('Success_message', '✔ You Have Successfully Deleted Room');

        return back();
    }

    // Save Booking Function
    public function savebooking(Request $request)
    {
        // Validation
        $this->validate($request, [
            'guest_id' => 'required',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        // Save Record into Bookings DB
        $booking = new Booking();
        $booking->guest_id = $request->input('guest_id');
        $booking->room_id = $request->input('room_id');
        $booking->check_in = $request->input('check_in');
        $booking->check_out = $request->input('check_out');
        $booking->status = 1;
        $booking->save();

        // Update the room status to 0 (not available)
        $room = Room::find($request->input('room_id'));
        if ($room) {
            $room->status = 0;
            $room->save();
        }

        \Session::flash('Success_message', 'Booking Placed Successfully ');

        return back();
    }

    // Update Booking function
    public function updatebooking(Request $request, $id)
    {
        $booking = Booking::find($id);

        // Validation
        $this->validate($request, array(
            'guest_id' => 'required',
            'room_id' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ));

        $booking->guest_id = $request->input('guest_id');
        $booking->room_id = $request->input('room_id');
        $booking->check_in = $request->input('check_in');
        $booking->check_out = $request->input('check_out');
        $booking->status = 1;

        $booking->save();

        \Session::flash('Success_message', '✔ Booking Updated Successfully');

        return back();
    }

    // Delete Booking Function
    public function deletebooking($id)
    {

        $booking = Booking::where('id', $id)->findOrFail($id);
        $booking->delete();

        \Session::flash('Success_message', '✔ Booking Deleted Successfully');

        return back();
    }

    public function checkoutguest($id)
    {

        Room::where(['id' => $id])
            ->update(array('status' => 1));

        Booking::where(['id' => $id])
            ->update(array('status' => 0));

        \Session::flash('Success_message', 'Checkout Successful');

        return back();
    }

    // Save Payment Function
    public function savepayment(Request $request)
    {
        // Validation
        $this->validate($request, [
            'booking_id' => 'required',
            'amount' => 'required|numeric',
        ]);

        // Save Record into Payment DB
        $payment = new Payment();
        $payment->booking_id = $request->input('booking_id');
        $payment->amount = $request->input('amount');
        $payment->status = 1;
        $payment->save();

        \Session::flash('Success_message', 'Payment Made Successfully ');

        return back();
    }

    // Update Payment function
    public function updatepayment(Request $request, $id)
    {
        $payment = Payment::find($id);

        // Validation
        $this->validate($request, array(
            'booking_id' => 'required',
            'amount' => 'required|numeric',
        ));

        $payment->booking_id = $request->input('booking_id');
        $payment->amount = $request->input('amount');
        $payment->status = 1;

        $payment->save();

        \Session::flash('Success_message', '✔ Payment Updated Successfully');

        return back();
    }

    // Delete Payment Function
    public function deletepayment($id)
    {

        $payment = Payment::where('id', $id)->findOrFail($id);
        $payment->delete();

        \Session::flash('Success_message', '✔ Payment Deleted Successfully');

        return back();
    }

    public function showOccupancy(Request $request)
    {
        $startDate = $request->get('start_date', Carbon::today()->subMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', Carbon::today()->format('Y-m-d'));

        $occupancyRates = Booking::whereBetween('check_in', [$startDate, $endDate])
            ->orWhereBetween('check_out', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->check_in)->format('Y-m-d');
            })
            ->map(function ($bookings) {
                return count($bookings);
            });

        return view('admin.report_occupancy', compact('occupancyRates', 'startDate', 'endDate'));
    }

    public function showRevenue(Request $request)
    {
        $startDate = $request->get('start_date', Carbon::today()->subMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', Carbon::today()->format('Y-m-d'));

        $revenueData = Payment::whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('Y-m-d');
            })
            ->map(function ($payments) {
                return $payments->sum('amount');
            });

        return view('admin.revenue_report', compact('revenueData', 'startDate', 'endDate'));
    }

    public function showGuests(Request $request)
    {
        $startDate = $request->get('start_date', Carbon::today()->subMonth()->format('Y-m-d'));
        $endDate = $request->get('end_date', Carbon::today()->format('Y-m-d'));

        $guestDemographics = Guest::whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy('country')
            ->map(function ($guests) {
                return count($guests);
            });

        return view('admin.guest_report', compact('guestDemographics', 'startDate', 'endDate'));
    }
}
