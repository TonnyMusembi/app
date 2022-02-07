<?php

namespace App\Http\Controllers;
use App\Http\Resources\RegisterResource;
use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  public function index(){
        return new RegisterResource(register::all());
    }

public function store(){
    return'';
}
}
