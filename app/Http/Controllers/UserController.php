<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function indexID($id)
    {
        return view('user.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('login.index'));
    }  
}
