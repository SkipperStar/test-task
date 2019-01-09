<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function execute()
    {
        $hotels = Hotel::all();

        return view('hotels.index', compact('hotels'));
    }

}
