<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\WishList;
use App\Models\Products;
use App\Models\Cart;
use App\Models\Orders;
use Illuminate\Support\Facades\DB;


class RequestUserController extends Controller
{
//--------------------------------------------------------------------------------------------
    public function Wishlist($id){

        $detail = new WishList();

        $detail->uid = session('usersInfo')['id'];
        $detail->pid = $id;
        $detail->save();

        return redirect('/customer/wishlist');

    }

    public function showWishList(){

         $listPid = WishList::where('uid', session('usersInfo')['id'])->pluck('pid');
         $products = Products::whereIn('pid', $listPid)->get();

          return view('wishlist', compact('products'));
    }


    public function removeWishList($id){

        $item = WishList::where('pid', $id)->first();
            if(session('usersInfo')['id'] == $item->uid){
                $item->delete();
            }

            return redirect('/customer/wishlist');
    }
//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
    public function cart($id, Request $request){

        $detail = new Cart();

        $detail->uid = session('usersInfo')['id'];
        $detail->pid = $id;
        if(isset($request->qty)){
            $detail->qty = $request->qty;
        }
        else $detail->qty = 1;

        $detail->save();

        return redirect('customer/cart');

    }

    public function showCart(){

        $listPid = Cart::where('uid', session('usersInfo')['id'])->pluck('pid');
        $products = Products::whereIn('pid', $listPid)->get();
        $qty = Cart::where('uid', session('usersInfo')['id'])->pluck('qty');

        $length = $products->toArray();
        $product = $products;

        for($i = 0 ; $i< count($length); $i++){
             $count = $qty[$i];
             $product[$i]->qtys = $count;
        }
         return view('cart', compact('product'));
   }

   public function removeCart($id){

    $item = Cart::where('pid', $id)->first();
    if(session('usersInfo')['id'] == $item->uid){
        $item->delete();
    }
    return redirect('/customer/cart');
   }
//--------------------------------------------------------------------------------------------

 public function setOrder($data, Request $request){

    $timestamp = Carbon::now()->toDateTimeString();
    $dataArray = json_decode($data, true);

    foreach($dataArray as $da){
           $detail = new Orders();

           $detail->uid = session('usersInfo')['id'];
           $detail->pid = $da['pid'];
           $detail->sid = $da['sid'];
           $detail->order_status = 1;
           $detail->order_on = $timestamp;
           $detail->oqty = $da['qtys'];
           if($request->method == 'internet' || $request->method == 'card' || $request->method == 'paypal'){
            $detail->payment_status = 1;
           }
           else $detail->payment_status = 2;

           $detail->method = $request->method;
           $detail->save();
    }
}

  public function orderHistory(){

    $ordertime = DB::table('orders')
    ->select('created_at','order_status')
    ->groupBy('created_at','order_status')
    ->having(DB::raw('COUNT(*)'), '>', 1)
    ->get();

            return view('order-history', compact('ordertime'));
  }

  public function getInvoice(){

  }
}

