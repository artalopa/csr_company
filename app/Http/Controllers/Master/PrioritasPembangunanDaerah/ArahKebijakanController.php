<?php

namespace App\Http\Controllers\Master\PrioritasPembangunanDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArahKebijakanController extends Controller
{
    public function index()
    {
        return view('master.prioritas_pembangunan_daerah.arah_kebijakan.index');
    }

    public function detail()
    {
        return view('master.prioritas_pembangunan_daerah.arah_kebijakan.detail');
    }

    public function create()
    {
        return view('master.prioritas_pembangunan_daerah.arah_kebijakan.create');
    }

    public function edit()
    {
        return view('master.prioritas_pembangunan_daerah.arah_kebijakan.edit');
    }
}
