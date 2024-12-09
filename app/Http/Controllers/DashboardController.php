<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $rooms = Rooms::all();
//        dd($rooms);
        return view('dashboard', [
            'rooms' => $rooms
        ]);
    }
}
