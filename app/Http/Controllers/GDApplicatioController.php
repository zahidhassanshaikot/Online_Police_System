<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GDApplicatioController extends Controller
{
    public function GD_application_page(){
        return view('back-end.GD_application_page');
    }
    public function Clearance_page(){
        return view('back-end.Clearance_page');
    }
    public function GD_application_list(){
        return view('back-end.GD_application_list');
    }
    public function GD_application_preview(){
        return view('back-end.GD_application_preview');
    }
    public function Clearance_list(){
        return view('back-end.Clearance_list');
    }
    public function Clearance_preview(){
        return view('back-end.Clearance_preview');
    }
}
