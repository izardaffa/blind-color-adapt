<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIRecolorAssistantController extends Controller
{
    public function index()
    {
        return view('ui-recolor-assistent.index');
    }
}
