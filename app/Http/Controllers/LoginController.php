<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use app\models\User;

class LoginController extends Controller
{
    public function index()
        {
            if(Auth::check()){
                return redirect('posts.index');
            }
            else {
                return view('login.index');
            }
        }
    
    public function store(Request $req)
    {
        $validation = Validator::make($req->all(), [
            "email" => "required|email",
            "password" => "required",
        ]);

        if ($validation->fails()) {
            return redirect('login.index')->withErrors($validation)->withInput();
        }
        
        if(Auth::attempt($validate)){
            return redirect('posts.index');
        }
        
    }    
}
