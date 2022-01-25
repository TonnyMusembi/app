<?php

namespace App\Http\Controllers;
use App\Http\Resources\PhonesResource;
use App\Models\phones;

use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index(){
        return new PhonesResource(phones::all());

    }

    public function store(){
        response("", 200);
}
public function  select(){
return '';
}
}
