<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage.home');
    }

    public function about()
    {
        return view('homepage.about');
    }

    public function struktur()
    {
        return view('homepage.struktur');
    }
    public function kegiatan()
    {
        return view('homepage.kegiatan');
    }
    public function divisi()
    {
        return view('homepage.divisi');
    }
}
