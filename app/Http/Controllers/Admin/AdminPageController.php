<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Guest;
use App\Models\Payment;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AdminPageController extends Controller
{
    public function dashboard()
    {
        $data['todayDate'] = Carbon::now()->format('Y-m-d H:i:s');
        $data['allguest'] = Guest::count();
        $data['allroom'] = Room::count();
        $data['availableroom'] = Room::where('status', 1)->count();
        $data['allbooking'] = Booking::count();
        $data['allreservation'] = Reservation::count();
        $data['allpayment'] = Payment::where('status', 1)->sum('amount');
        return view('admin.dashboard', $data);
    }

    public function guests()
    {
        $data['guests'] = Guest::where('status', 1)->get();
        return view('admin.guest', $data);
    }

    public function reservations()
    {
        $data['reservations'] = Reservation::all();
        return view('admin.reservation', $data);
    }

    public function bookings()
    {
        $data['guests'] = Guest::where('status', 1)->get();
        $data['rooms'] = Room::where('status', 1)->get();
        $data['bookings'] = Booking::all();
        return view('admin.booking', $data);
    }

    public function rooms()
    {
        $data['rooms'] = Room::all();
        return view('admin.room', $data);
    }

    public function payments()
    {
        $data['payments'] = Payment::all();
        $data['bookings'] = Booking::all();
        return view('admin.payment', $data);
    }

    public function occupancyrate()
    {
        return view('admin.report_occupancy');
    }

    public function revenue()
    {
        return view('admin.revenue_report');
    }

    public function guestreport()
    {
        return view('admin.guest_report');
    }
}
