<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirektoriDokterRujukanController extends Controller
{
    public function index()
    {
        return view('direktori-dokter-rujukan.index');
    }
}
