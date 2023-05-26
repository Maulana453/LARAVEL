<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class delapanController extends Controller
{
    public function index(){
        return view('pemeriksaanform');
    }

}
