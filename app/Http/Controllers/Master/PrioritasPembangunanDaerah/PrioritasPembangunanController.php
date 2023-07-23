<?php

namespace App\Http\Controllers\Master\PrioritasPembangunanDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrioritasPembangunanController extends Controller
{
    public function index()
    {
        return view('master.prioritas_pembangunan_daerah.prioritas_pembangunan.index');
    }

    public function detail()
    {
        return view('master.prioritas_pembangunan_daerah.prioritas_pembangunan.detail');
    }

    public function create()
    {
        return view('master.prioritas_pembangunan_daerah.prioritas_pembangunan.create');
    }

    public function edit()
    {
        return view('master.prioritas_pembangunan_daerah.prioritas_pembangunan.edit');
    }
}
