<?php

namespace App\Http\Controllers;
use App\Http\Resources\TownsResource;
use App\Models\towns;
use Illuminate\Database\Schema\SchemaState;
use Illuminate\Http\Request;
use Nette\Schema\Schema;

class TownsController extends Controller
{
    public function index(){
        return new TownsResource(towns::all());
    }

    public function store (){

    }

 public function create (){
   
 }
 public function up(){
     //

 }
}
