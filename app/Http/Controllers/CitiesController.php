<?php

namespace App\Http\Controllers;

use App\Http\Resources\CitiesResource;
use App\Models\cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function index(){
        return new CitiesResource(cities::all());
    }
    public function store (){
        return '';
    }
    public function edit(){

    }
}
