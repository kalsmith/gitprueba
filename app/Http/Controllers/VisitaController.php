<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function index()
    {
        $title = "Index";
        return view('back.bitacora.index', compact('title'));
    }
}
