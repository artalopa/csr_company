<?php

namespace App\Http\Controllers\Master\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SectorKbliController extends Controller
{
    public function index()
    {
        return view('master.perusahaan.kbli.sector.index');
    }

    public function detail()
    {
        return view('master.perusahaan.kbli.sector.detail');
    }

    public function create()
    {
        return view('master.perusahaan.kbli.sector.create');
    }

    public function edit()
    {
        return view('master.perusahaan.kbli.sector.edit');
    }
}
