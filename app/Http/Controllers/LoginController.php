<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
        {
            if(Auth::check()){
                return redirect(route('user.index'));
            }
            else {
                return view('login.index');
            }
        }
    
    public function store(Request $req)
    {
        // $validation = Validator::make($req->all(), [
        //     "email" => "required|email",
        //     "password" => "required",
        // ]);

        if(Auth::attempt(
            [
            'email' => $req->input("email"), 
            'password' => $req->input("password"),
            ], ($req->input("remember") == "on" ? true : false))) 
            {
                return redirect(route('user.index'));
            } 
            else 
            { 
                return redirect(route('login.index'))->withErrors([
                    "email" => "Неправильный логин или пароль",
                    "password" => "Неправильный логин или пароль"
                ]); 
            }
    }    
}