<?php

namespace App\Http\Controllers;
use App\Http\Resources\VehiclesResource;
use App\Models\vehicles;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        return new VehiclesResource(vehicles::all());
    }
}
