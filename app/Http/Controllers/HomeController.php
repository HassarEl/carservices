<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {
        if(Auth::id()){
            if(Auth::user()->role == 'admin'){
                return view('admin.dashboard');
            }
            else if(Auth::user()->role == 'manager') {
                return view('dashboard');
            }
            else {
                return view('layouts.master');
            }
        }
        else {
            return view('user.front_page');
        }



        return view('user.front_page');
    }
}
