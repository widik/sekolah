<?php

namespace App\Http\Controllers;

use App\buku;
use Illuminate\Http\Request;
use DataTables;

class LibraryController extends Controller
{
    public function index()
    {
        $data['title'] = "Sistem Informasi Sekolah";
        return view('elibrary.index', ['data'=>$data]);
    }

    public function json()
    {
        //alias
        //return Datatables::of(buku::all())->make(true);
        //return Datatables()->of(buku::query())->toJson();
        //return Datatables()->eloquent(buku::query())->toJson();
        //return Datatables()->collection(buku::all())->toJson();
        //return Datatables(buku::query())->toJson();
        return Datatables(buku::all())->toJson();

    }

    public function dashboard()
    {
        $data['title'] = "Sistem Informasi Sekolah";
        return view('elibrary.dashboard', ['data'=>$data]);
    }
}
