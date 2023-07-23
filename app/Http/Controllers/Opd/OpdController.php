<?php

namespace App\Http\Controllers\Opd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index()
    {
        return view('opd.index');
    }

    public function create()
    {
        return view('opd.create');
    }
}
