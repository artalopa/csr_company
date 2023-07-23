<?php

namespace App\Http\Controllers\Master\Penilaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NominalController extends Controller
{
    public function index()
    {
        return view('master.penilaian.nominal.index');
    }
}
