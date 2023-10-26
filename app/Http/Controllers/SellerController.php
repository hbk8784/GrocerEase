<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class SellerController extends Controller
{
    public function addProducts(Request $request){
        $detail = $request->toArray();


       $fileName = time()."-ws.".$request->file('media')->getClientOriginalExtension();
       $request->file('media')->storeAs('public',$fileName);

        // $request->validate([
        //    'name'=>'unique:users|email',
        //    'phone'=> 'unique:users|max:10|min:10',
        // ]);


             $productsInfo = new Products();

        //       //checking if password and confirm password is matching before saving the data
        //      if($detail['confirmPassword'] == $detail['password']){

                  $productsInfo->image = $fileName;
                  $productsInfo->name = $detail['name'];
                  $productsInfo->desc = $detail['desc'];
                  $productsInfo->maincat = $detail['maincat'];
                  $productsInfo->subcat  = $detail['subcat'];
                  $productsInfo->brand = $detail['brand'];
                  $productsInfo->weight = $detail['weight'];
                  $productsInfo->status = (int)$detail['status'];
                  $productsInfo->price = $detail['price'];
                  $productsInfo->qty = $detail['qty'];
                  $productsInfo->sid = Session('usersInfo')['id'];
                  $productsInfo->save();


        //             return view('login',['success'=>'success-show', 'role'=> $detail['role']]);
        //      }
        //      else{
        //         return view('signup', ['failed'=>'password not matched']);
        //      }

    }

    public function showProducts(){

        $products = Products::where('sid','=', Session('usersInfo')['id'])->get();
             return view('Seller.pages.products', compact('products'));

    }
}
