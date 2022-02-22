<?php

namespace App\Http\Controllers;
use App\Http\Resources\VehicleResource;
use App\Models\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        return new VehicleResource(vehicle::all());
    }
 public function store(){
return new VehicleResource(vehicle::all());
 }
}
