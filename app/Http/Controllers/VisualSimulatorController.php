<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisualSimulatorController extends Controller
{
    public function index()
    {
        return view('visual-simulator.index');
    }
}
