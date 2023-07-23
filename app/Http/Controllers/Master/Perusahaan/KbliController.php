<?php

namespace App\Http\Controllers\Master\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KbliController extends Controller
{
    public function index()
    {
        return view('master.perusahaan.kbli.index');
    }

    public function detail()
    {
        return view('master.perusahaan.kbli.detail');
    }

    public function create()
    {
        return view('master.perusahaan.kbli.create');
    }

    public function edit()
    {
        return view('master.perusahaan.kbli.edit');
    }
}
