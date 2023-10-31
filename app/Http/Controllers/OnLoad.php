<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class OnLoad extends Controller
{
    public function load(){

          $on_bestSeller = Products::inRandomOrder()->take(10)->get();
          $on_hero = products::inRandomOrder()->take(2)->get();

               return view('app', compact('on_bestSeller','on_hero'));
    }

}
