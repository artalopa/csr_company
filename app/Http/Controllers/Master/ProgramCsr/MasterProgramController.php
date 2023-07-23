<?php

namespace App\Http\Controllers\Master\ProgramCsr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterProgramController extends Controller
{
    public function index()
    {
        return view('master.program_csr.master_program.index');
    }

    public function detail()
    {
        return view('master.program_csr.master_program.detail');
    }

    public function create()
    {
        return view('master.program_csr.master_program.create');
    }

    public function edit()
    {
        return view('master.program_csr.master_program.edit');
    }
}
