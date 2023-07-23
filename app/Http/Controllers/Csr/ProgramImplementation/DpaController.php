<?php

namespace App\Http\Controllers\Csr\ProgramImplementation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DpaController extends Controller
{
    public function index()
    {
        return view('csr.dpa.index');
    }
}
