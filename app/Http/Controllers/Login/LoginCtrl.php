<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginCtrl extends Controller
{
    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
            'name' => 'required'
        ]);
    }
}
