<?php

namespace App\Http\Controllers;
use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function backend(){
        $daftar_info = Info::all();
        return view('info.backend', compact('daftar_info'));
    }
}
