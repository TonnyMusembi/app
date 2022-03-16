<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    public function index()
    {
        return new CarResource(Car::all());
         //return response()->json(['data'=>'data']);
    }
    public function store()
    {
        return new CarResource(Car::all());
    }
    public function down()
    {
        return new CarResource(Car::all());
    }
    public function edit(){
        return response()->json  (['data'=> 'data']);
    }
    public function delete(){
        
    }
}
