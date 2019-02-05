<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GmapsController extends Controller
{
    public function index()
    {
       $locations=DB::table('parkings')->get();
        return view('reservations.searchParking', compact('locations'));
    }
}
