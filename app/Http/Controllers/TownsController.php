<?php

namespace App\Http\Controllers;
use App\Http\Resources\TownsResource;
use App\Models\towns;
use Illuminate\Http\Request;

class TownsController extends Controller
{
    public function index(){
        return new TownsResource(towns::all());
    }

    public function store (){
        return'';
    }

}
