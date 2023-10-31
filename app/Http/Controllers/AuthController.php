<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

//--------------------------------------------------------------------------------------------------

    public function login(Request $request){

        $request->validate([
            'userName'=> 'required',
            'password'=> 'required'
        ]);

        $detail = $request->toArray();

        //checking for user name and password validation
        $usersInfo = Users::where('userName','=',$detail['userName'])->first();
         if($usersInfo){
            if(Hash::check($detail['password'], $usersInfo->password)){
               $request->session()->put('usersInfo', $usersInfo->toArray());

                if(session('usersInfo')['role'] == 1){
                    return redirect('/admin/dashboard');
                }
                elseif(session('usersInfo')['role'] == 2){
                    if(session('usersInfo')['active'])
                    return redirect('/seller/dashboard');
                    else{
                        $request->session()->flush();
                        return redirect('/login')->with('active', "your account is inactive");
                    }

                }
                elseif(session('usersInfo')['active']){
                    return redirect('/');
                }
                else{
                    $request->session()->flush();
                    return redirect('/login')->with('active', "Your account is inactive");
                }
            }
            else{
                return back()->with('failed', "Wrong password");
            }
         }
          else{
            return back()->with('failed', "User Not Found !!!");
          }
    }

//--------------------------------------------------------------------------------------------------

    public function register(Request $request){
        $detail = $request->toArray();

        $request->validate([
           'email'=>'unique:users|email',
           'phone'=> 'unique:users|max:10|min:10',
        ]);
             $usersInfo = new Users();

              //checking if password and confirm password is matching before saving the data
             if($detail['confirmPassword'] == $detail['password']){
                 if($detail['role'] == 2){
                    $usersInfo->firstName = $detail['firstName'];
                  $usersInfo->lastName = $detail['lastName'];
                  $usersInfo->gender = $detail['gender'];
                  $usersInfo->dob = $detail['dob'];
                  $usersInfo->email  = $detail['email'];
                  $usersInfo->phone = $detail['phone'];
                  $usersInfo->address = $detail['address'];
                  $usersInfo->userName = $detail['userName'];
                  $usersInfo->password = Hash::make($detail['password']);
                  $usersInfo->role = $detail['role'];
                  $usersInfo->active = 0 ;
                  $usersInfo->save();
                 }
                 else{
                    $usersInfo->firstName = $detail['firstName'];
                    $usersInfo->lastName = $detail['lastName'];
                    $usersInfo->gender = $detail['gender'];
                    $usersInfo->dob = $detail['dob'];
                    $usersInfo->email  = $detail['email'];
                    $usersInfo->phone = $detail['phone'];
                    $usersInfo->address = $detail['address'];
                    $usersInfo->userName = $detail['userName'];
                    $usersInfo->password = Hash::make($detail['password']);
                    $usersInfo->role = $detail['role'];
                    $usersInfo->active = 1;
                    $usersInfo->save();
                 }
                    return view('login',['success'=>'success-show', 'role'=> $detail['role']]);
             }
             else{
                return view('signup', ['failed'=>'password not matched']);
             }
    }

//--------------------------------------------------------------------------------------------------

    public function adminDash(Request $request){

        if(session('usersInfo')){

            $au_customers = Users::where('role', 3)->get();
            $au_sellers = Users::where('role', 2)->get();
            $au_orders = DB::table('orders')
            ->select('created_at')
            ->groupby('created_at')
            ->having(DB::raw('COUNT(*)'), '>', 1)
            ->get();
            $au_products = Products::all();

            $au_allOrders = Orders::select('pid','order_status')->latest()->take(7)->get();
            $au_pids = $au_allOrders->pluck('pid');

            $au_dashProduct = Products::whereIn('pid', $au_pids)->get();

            $au_dashProduct->map(function ($product) use ($au_allOrders) {
                $matchingOrder = $au_allOrders->where('pid', $product->pid)->first();
                if ($matchingOrder) {
                    $product->order_status = $matchingOrder->order_status;
                }
                return $product;
            });

            $au_latestRecords = Products::latest()->take(4)->get();
            $au_latestMembers =  Users::latest()->take(4)->get();

             $au_productCount = count($au_products->toArray());
             $au_customerCount = count($au_customers->toArray());
             $au_sellerCount = count($au_sellers->toArray());
             $au_orderCount = count($au_orders->toArray());


            return view('Admin.admin-dash', compact('au_customerCount','au_sellerCount', 'au_orderCount', 'au_productCount', 'au_latestRecords', 'au_latestMembers', 'au_allOrders', 'au_dashProduct'));
         }
         else{
           return redirect('/login');
         }
     }

//-------------------------------------------------------------------------------------------------

     public function logOut(Request $request){

        if(session('usersInfo')){
            $request->session()->flush();
            return redirect('/login');
        }
        return redirect('/login');
     }

//--------------------------------------------------------------------------------------------------

     public function sellerDash(){

        if(session('usersInfo')){

        //   $s1_orders = Orders::where('sid',session('usersInfo')['id'])->get();
        //   dd($s1_orders);

            return view('Seller.seller-dash');
         }
         else{
           return redirect('/login');
         }

     }

     public function customerProfile(){

        $au_profiles = Users::where('role', '=', 3)->get();

        return view('Admin.pages.examples.customer-profile', compact('au_profiles'));
     }

     public function deactivate($id){

           $au_active = Users::find($id);
           $au_active->update(['active'=> 0]);

           return redirect('/admin/customer/profile');
     }

     public function activate($id){

        $au_active = Users::find($id);
        $au_active->update(['active'=> 1]);

        return redirect('/admin/customer/profile');

     }

     public function products(){

        $au_sellerProduct = Products::all();

        return view('Admin.pages.examples.projects', compact('au_sellerProduct'));
     }

     public function sellerProfile(){

          $au_sellerProfile = Users::where('role', '=', 2)->get();

          return view('Admin.pages.examples.seller-profile', compact('au_sellerProfile'));

     }

     public function sdeactivate($id){

        $au_active = Users::find($id);
        $au_active->update(['active'=> 0]);

        return redirect('/admin/seller/profile');
  }

  public function sactivate($id){

     $au_active = Users::find($id);
     $au_active->update(['active'=> 1]);

     return redirect('/admin/seller/profile');

  }
}



//-------------------------------------------------------------------------------------------------
