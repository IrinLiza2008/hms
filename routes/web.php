<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllotlistController;
use App\Http\Controllers\RoomdetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.master');
});
Route::get('admin/allotlist',[AllotlistController::class,'allotlist'])->name('admin.allotlist');
Route::get('admin/allotlist/add',[AllotlistController::class,'add'])->name('admin.allotlist.add');
Route::post('admin/allotlist/store',[AllotlistController::class,'store'])->name('admin.allotlist.store');

Route::get('admin/roomdetails',[RoomdetailsController::class,'roomdetails'])->name('admin.roomdetails');


