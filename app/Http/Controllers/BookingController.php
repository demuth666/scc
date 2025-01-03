<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Rooms;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function detail($id)
    {
        $rooms = Rooms::with('facility')->find($id);
        $booking = Booking::where('room_id', $id)
            ->whereDate('tanggal', Carbon::now())
            ->get();
//        dd($booking);
        return view('booking-details', [
            'room' => $rooms,
            'booking' => $booking,
        ]);
    }

    public function history($id)
    {
        $booking = Booking::where('user_id', $id)->orderBy('tanggal', 'desc')->get();
//        dd($booking->room->room_name);
        return view('booking-history', [
            'booking' => $booking,
        ]);
    }
}
