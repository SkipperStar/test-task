<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{

    public function execute() {

        if(view()->exists('hotels.add.index')) {

            return view('hotels.add.index');

        }
    }

    public function store(Request $request) {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            Storage::disk('public')->put( 'upload/'.$image->getClientOriginalName(), file_get_contents($image));
            $request->request->add(['image' => '/storage/upload/'.$image->getClientOriginalName()]);
        }

        $data = Hotel::create($request->all());

        if ($request['floor']) {
            foreach ($request['floor'] as $k => $v) {
                $option = new Option;
                $option->hotel_id = $data->id;
                $option->floor = $v;
                $option->save();
            }
        }

        return redirect()->route('booking');

    }
}
