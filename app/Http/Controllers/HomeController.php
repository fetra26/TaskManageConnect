<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->role_id == 1) {
            return view('dashboard');
        }elseif (Auth::user()->role_id == 2) {
            return view('manager.dashboard');
        }elseif (Auth::user()->role_id == 3) {
            return view('admin.dashboard');
        }else{
            return redirect()->route('login');
        }
    }
}
