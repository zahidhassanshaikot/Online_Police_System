<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;


class DeshboardController extends Controller
{
    public function index(){
        return view('back-end.home');
    }
    public function userLogin(){
        return view('back-end.login');
    }
    public function userReg(){
        return view('back-end.registration');
    }
}
