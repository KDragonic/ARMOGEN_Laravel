<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
        {
            return view('register.index');
        }
    public function store(Request $req)
        {
            // if (Auth::check()) {
            //     return view('posts.index');
            // }

            $validation = Validator::make($req->all(), [
                "nickname" => "required|unique:users",
                "email" => "required|email|unique:users",
                "password" => "required|min:5",
                're_password' => 'required|min:5|same:password',
                "gender" => "required",
            ]);

            if ($validation->fails()) {
                return redirect('register.index')->withErrors($validator)->withInput();
            }
            
            // DB::table('users')->insert([
            //     [
            //         'nickname' => $req->nickname,
            //         'email' => $req->email,
            //         'password' => $req->password,
            //         'gender' => $req->gender,
            //     ],
            //   ]);
            // return view('login.index');

            $user = new User();

            $user->name = $req->input('name');
            $user->name = $req->input("email");
            $user->name = bscrypt($req->input("password"));
            $user->name = $req->input("gender");

            $user->save();
        }    
}    

