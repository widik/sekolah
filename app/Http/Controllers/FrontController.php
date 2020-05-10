<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $data['title'] = "Sistem Informasi Sekolah";
        return view('front', ['data'=>$data]);
    }

}
