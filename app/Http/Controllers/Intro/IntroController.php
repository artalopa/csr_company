<?php

namespace App\Http\Controllers\Intro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroController extends Controller
{
    public function index()
    {
        return view('intro.index');
    }
}
