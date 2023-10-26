<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            return view('Admin.admin-dash');
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
            return view('Seller.seller-dash');
         }
         else{
           return redirect('/login');
         }

     }
}

//-------------------------------------------------------------------------------------------------
