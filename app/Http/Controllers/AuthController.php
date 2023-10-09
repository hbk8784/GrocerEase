<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // +--------------------------+
    // | Users login              |
    // +--------------------------+
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
               $request->session()->put('role', $usersInfo->role);

                if($usersInfo->role == 0){
                    return redirect('/admin/dashboard');
                }
                return view('app');
            }
            else{
                return back()->with('failed', "Wrong password");
            }
         }
          else{
            return back()->with('failed', "User Not Found !!!");
          }
    }


    // +--------------------------+
    // |Registration for new user |
    // +--------------------------+
    public function register(Request $request){
        $detail = $request->toArray();
        $request->validate([
           'email'=>'unique:users|email',
           'phone'=> 'unique:users|max:10',
        ]);
             $usersInfo = new Users();

              //checking if password and confirm password is matching before saving the data
             if($detail['confirmPassword'] == $detail['password']){

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
                  $usersInfo->save();


                    return view('login',['success'=>'success-show', 'role'=> $detail['role']]);
             }
             else{
                return view('signup', ['failed'=>'password not matched']);
             }

    }

    public function adminDash(Request $request){

        $data = array();
        if($request->session()->has('role')){
            $data = Users::all();
            return view('Admin.admin-dash', compact('data'));
         }
         else{
           return redirect('/login');
         }
     }

     public function logOut(Request $request){
        if($request->session()->has('role')){
            $request->session()->pull('role');
            return redirect('/login');
        }
        return redirect('/login');
     }

     public function sellerDash(){

     }
}
