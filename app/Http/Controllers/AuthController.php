<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Crypt;

class AuthController extends Controller
{
    public function show(){


    }

    public function login(Request $request){

          $userInfo = Users::all();

          print_r($userInfo->toArray());

    }

    public function register(Request $request){

        $detail = $request->toArray();

        $request->validate([
           'email'=>'unique:users|email',
           'phone'=> 'unique:users|max:11'
        ]);

        if($detail['password']!= $detail['confirmPassword']){
            return view('signup', ['message', 'password not matched']);
        }

            //  $usersInfo = new Users();

            //  if($detail['confirmPassword'] == $detail['password']){

            //       $usersInfo->firstName = $detail['firstName'];
            //       $usersInfo->lastName = $detail['lastName'];
            //       $usersInfo->gender = $detail['gender'];
            //       $usersInfo->dob = $detail['dob'];
            //       $usersInfo->email  = $detail['email'];
            //       $usersInfo->phone = $detail['phone'];
            //       $usersInfo->address = $detail['address'];
            //       $usersInfo->userName = $detail['userName'];
            //       $usersInfo->password = Crypt::encrypt($detail['password']);
            //       $usersInfo->role = $detail['role'];
            //       $usersInfo->save();

            //       return view('login',['success'=>'success-show']);
            //  }
            //  else{
            //     return view('signup', ['failed'=>'Registration Failed Try Again !!!']);
            //  }

    }
}
