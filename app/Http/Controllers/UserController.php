<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|confirmed'
      ]);

      $user = User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password)
      ]);

      $token = $user->createToken('mytoken')->plainTextToken;

      return response([
        'user'=>$user,
        'token'=>$token
      ],201);
    }

    public function logout(){
        Auth()->user()->tokens()->delete();

        return response([
            'message'=>'Successfully Logged out!'
        ]);
    }
}
