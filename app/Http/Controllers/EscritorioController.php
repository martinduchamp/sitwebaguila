<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscritorioController extends Controller
{
    public function __invoke()
    {
        return view('escritorio.index');
    }
}
