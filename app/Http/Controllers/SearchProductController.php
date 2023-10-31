<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SearchProductController extends Controller
{
    public function productResult($query){

        $searchProduct = Products::where('maincat',$query)->get();

        return view('products', compact('searchProduct'));

    }

    public function subCatSearch($query){

        $searchProduct = Products::where('subcat', $query)->get();

         return view('products', compact('searchProduct'));
    }

}
