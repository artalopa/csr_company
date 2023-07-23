<?php

namespace App\Http\Controllers\Csr\ProgramRka;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramRkaController extends Controller
{
    public function index()
    {
        return view('csr.program_rka.index');
    }

    public function join()
    {
        return view('csr.program_rka.join');
    }
}
