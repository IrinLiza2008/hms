<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allotlist;

class AllotlistController extends Controller
{
    //
    public function allotlist()
    {
        return view('admin.layouts.allotlist');
    }
    public function add()
    {
        return view('admin.pages.allotlist_add');
    }
    public function store(Request $request)
    {
        Allotlist::create([
            'sid'=>$request->sid,
            'name'=>$request->name,
            'room'=>$request->room,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'p_phone'=>$request->p_phone,


        ]);
        return redirect()->back();
    }
}
