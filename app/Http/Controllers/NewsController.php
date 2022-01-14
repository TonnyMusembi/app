<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function index(){
        return new NewsResource(news::all());
    }
}
