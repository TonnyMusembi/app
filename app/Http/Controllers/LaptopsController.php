<?php

namespace App\Http\Controllers;
use App\Http\Resources\LaptopsResource;
use App\Models\laptops;
use Illuminate\Http\Request;

class LaptopsController extends Controller
{
    public function index(){
        return new LaptopsResource(laptops::all());
    }
    public function store(){
        return new LaptopsResource(laptops::all()) ;
    }
public function create(){
    $user =Laptops::where('id=');
    //return 'Type:'.$laptop ->Type;
    return response() ->json (['status'=>200,]);

}
public function restore(){
    return'';
}
}
