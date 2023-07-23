<?php

namespace App\Http\Controllers\Master\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubSectorKbliController extends Controller
{
    public function index()
    {
        return view('master.perusahaan.kbli.sub_sector.index');
    }

    public function detail()
    {
        return view('master.perusahaan.kbli.sub_sector.detail');
    }

    public function create()
    {
        return view('master.perusahaan.kbli.sub_sector.create');
    }

    public function edit()
    {
        return view('master.perusahaan.kbli.sub_sector.edit');
    }
}
