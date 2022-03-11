<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegisterResource;
use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return new RegisterResource(register::all());
    }

    public function store()
    {
        return '';
    }
    public function create()
    {
        return new RegisterResource(register::all());
    }
    public function logout (Request $request) {
        $token = $request->user()->token();
        $token->revoke();
        $response = ['message' => 'You have been successfully logged out!'];
        return response($response, 200);
    }
    public function build(){
        
    }
}
