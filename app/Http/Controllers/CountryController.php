<?php

namespace App\Http\Controllers;
use App\Http\Resources\CountryResource;
use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        return new CountryResource(country::all());
    }
}
