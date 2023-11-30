<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('tesview', [
            'title' => 'Beranda'
        ]);
    }

    public function kontak()
    {
        return view('contact', [
            'title' => 'Kontak'
        ]);
    }
}
