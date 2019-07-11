<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function addVehicle(){
        return view('back-end.add-vehicle');
    }
    public function searchVehicle(){
        return view('back-end.search-vehicle');
    }
}
