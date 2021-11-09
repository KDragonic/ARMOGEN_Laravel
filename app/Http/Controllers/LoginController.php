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
                return redirect(route('posts.index'));
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
            ])) {
                return redirect(route('user.index'));
            } else redirect(route('login.index'))->withErrors($validation)->withInput([
                "email" => "Неправильный логин или пароль",
                "password" => "Неправильный логин или пароль",
            ]);

        if ($validation->fails()) {
            return redirect(route('login.index'))->withErrors($validation)->withInput();
        }
        
        if(Auth::attempt($validation)){
            return redirect(route('posts.index'));
        }      
    }    
}
