<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{

    public function index(){
        return view('login.index', [
            "title"=>"Login",
            "active" => 'login'
        ]);
    }

}
