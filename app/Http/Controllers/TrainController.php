<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        //return today departures
        $trains = Train::where('departure_date', date('Y-m-d'))->get();

        return view('home', compact('trains'));
    }
}
