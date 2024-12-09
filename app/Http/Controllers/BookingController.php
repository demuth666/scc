<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create($id)
    {
        $room = Rooms::find($id);
        return view('booking-form', [
            'room' => $room
        ]);
    }

    public function store(Request $request, $id)
    {

    }
}
