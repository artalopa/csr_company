<?php

namespace App\Http\Controllers\Master\PrioritasPembangunanDaerah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramPmdnController extends Controller
{
    public function index()
    {
        return view('master.prioritas_pembangunan_daerah.program_pmdn.index');
    }

    public function detail()
    {
        return view('master.prioritas_pembangunan_daerah.program_pmdn.detail');
    }

    public function create()
    {
        return view('master.prioritas_pembangunan_daerah.program_pmdn.create');
    }

    public function edit()
    {
        return view('master.prioritas_pembangunan_daerah.program_pmdn.edit');
    }
}
