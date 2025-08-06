<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PusatEdukasiController extends Controller
{
    public function index()
    {
        return view('pusat-edukasi.index');
    }
}
