<?php

namespace App\Http\Controllers\Csr\ProgramImplementation\DPA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dp4Controller extends Controller
{
    public function index()
    {
        return view('csr.dpa.dp4.index');
    }

    public function detail()
    {
        return view('csr.dpa.dp4.detail');
    }

    public function validation()
    {
        return view('csr.dpa.dp4.validation');
    }
}
