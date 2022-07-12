<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', '2022-07-12 14:28:47')->get(); //static for now
        return view('home', compact('trains'));
    }
}
