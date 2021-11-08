<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validation = Validator::make($req->all(), [
            "email" => "required|email",
            "password" => "required",
        ]);

        if ($validation->fails()) {
            return redirect('login.index')->withErrors($validation)->withInput();
        }  

        Auth::login($user);
        return redirect('user.index');
        
    }    
}
