<?php

namespace App\Http\Controllers\Csr\ProgramImplementation\DPA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DukpdController extends Controller
{
    public function index()
    {
        return view('csr.dpa.dukpd.index');
    }
}
