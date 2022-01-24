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

    public function store(Request $request)
{
    $request->validate([
        'phonetype' => 'required',
        'country' => 'required',

    ]);
    return phones::create($request->all());
}
}
