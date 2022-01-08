<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomdetailsController extends Controller
{
    //
    public function roomdetails()
    {
        return view('admin.layouts.roomdetails');
    }
}
