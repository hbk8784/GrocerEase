<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class OnLoad extends Controller
{
    public function load(){

          $bestSeller = Products::inRandomOrder()->take(20)->get();
          $hero = products::inRandomOrder()->take(2)->get();

               return view('app', compact('bestSeller','hero'));
    }
}
