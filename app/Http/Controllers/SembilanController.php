<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SembilanController extends Controller
{
    public function index(){
        return view('week9');
    }

    // buat function yang di dalam nya mengambil inputan form
    // dengan menggunakan parameter $requst
    // dan lakukan pengecekan apakah nama dll sudah diisi atau belum (required)

    public function week9hasil(Request $request){
        $this->validate($request, [
            "nama" => 'required',
            "email" => 'required',
            "lokasi" => 'required',
            "jenis_kelamin" => 'required',
            "skill" => 'required',
        ]);
        return view('week9hasil', ['data' => $request]);
    }
}
