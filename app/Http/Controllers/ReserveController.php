<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function reserve(Request $request)
    {
        $floor = $request['floor'];                 // get floor that was choose
        $hotel = Hotel::find($request['hotel']); // found a hotel that was reserved
        if($hotel->available) {
            $options = $hotel->options;
            $isAvailable = $options->find($floor);
            if($isAvailable['available']) {                 //check is available hotel option
                $isAvailable->available = 0;
                $isAvailable->save();
                return redirect()->route('booking')->with('status', 'Hotel is reserve');
            } else {
                return redirect()->route('booking')->with('error', 'Floor not available');
            }
        } else {
            return redirect()->route('booking')->with('error', 'Hotel not available');
        }
    }
}
