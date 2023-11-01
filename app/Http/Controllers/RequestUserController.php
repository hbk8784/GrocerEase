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

        $re1_detail = new WishList();

        $re1_detail->uid = session('usersInfo')['id'];
        $re1_detail->pid = $id;
        $re1_detail->save();

        return redirect('/customer/wishlist');

    }

    public function showWishList(){

         $re2_listPid = WishList::where('uid', session('usersInfo')['id'])->pluck('pid');
         $re2_products = Products::whereIn('pid', $re2_listPid)->get();

          return view('wishlist', compact('re2_products'));
    }


    public function removeWishList($id){

        $re3_item = WishList::where('pid', $id)->first();
            if(session('usersInfo')['id'] == $re3_item->uid){
                $re3_item->delete();
            }

            return redirect('/customer/wishlist');
    }
//--------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------
    public function cart($id, Request $request){

        $re4_detail = new Cart();

        $re4_detail->uid = session('usersInfo')['id'];
        $re4_detail->pid = $id;
        if(isset($request->qty)){
            $re4_detail->qty = $request->qty;
        }
        else $re4_detail->qty = 1;

        $re4_detail->save();

        return redirect('customer/cart');

    }

    public function showCart(){

        $re5_listPid = Cart::where('uid', session('usersInfo')['id'])->pluck('pid');
        $re5_products = Products::whereIn('pid', $re5_listPid)->get();
        $re5_qty = Cart::where('uid', session('usersInfo')['id'])->pluck('qty');

        $re5_length = $re5_products->toArray();
        $re5_product = $re5_products;

        for($i = 0 ; $i< count($re5_length); $i++){
             $count = $re5_qty[$i];
             $re5_product[$i]->qtys = $count;
        }
         return view('cart', compact('re5_product'));
   }

   public function removeCart($id){

    $re6_item = Cart::where('pid', $id)->first();
    if(session('usersInfo')['id'] == $re6_item->uid){
        $re6_item->delete();
    }
    return redirect('/customer/cart');
   }
//--------------------------------------------------------------------------------------------

 public function setOrder(Request $request){

    $timestamp = Carbon::now()->toDateTimeString();
    $dataArray = json_decode($request->data, true);



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
           $detail->price = $da['price'];
           $detail->uName = session('usersInfo')['firstName'].' '.session('usersInfo')['lastName'];
           $detail->uEmail = session('usersInfo')['email'];
           $detail->uPhone = session('usersInfo')['phone'];
           $detail->uActive = session('usersInfo')['active'];
           $detail->pName = $da['name'];
           $detail->pBrand = $da['brand'];
           $detail->pMaincat = $da['maincat'];
           $detail->pSubcat = $da['subcat'];
           $detail->uAddress = session('usersInfo')['address'];
           $detail->save();
    }
    return redirect('/customer/order/history');
}

  public function orderHistory(){

    $re7_ordertime = DB::table('orders')
    ->select('created_at','order_status')
    ->groupBy('created_at','order_status')
    ->having(DB::raw('COUNT(*)'), '>', 1)
    ->get();

            return view('order-history', compact('re7_ordertime'));
  }

  public function getInvoice($date){

    $records = Orders::where('created_at', $date)->get();
    $pids = $records->pluck('pid')->toArray();

    $products = Products::whereIn('pid', $pids)->get();

        return view('invoice', compact('records', 'products'));
  }


  public function trackOrder($date){

    $records = Orders::where('created_at', $date)->get();
    $pids = $records->pluck('pid')->toArray();

    $products = Products::whereIn('pid', $pids)->get();

        return view('current-order', compact('records', 'products'));
  }
}

