<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class CarController extends Controller
{
    public function index(){
        return new CarResource(Car::all());
    }
    public function store(){
        return new CarResource(Car::all());
    }
    public function down(){
        return new CarResource(Car::all());
    }
    public function up(){
        Schema::create('articles', function ( $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
    }
}
