<?php

namespace App\Http\Controllers\Master\ProgramCsr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterBidangController extends Controller
{
    public function index()
    {
        return view('master.program_csr.master_bidang.index');
    }

    public function detail()
    {
        return view('master.program_csr.master_bidang.detail');
    }

    public function create()
    {
        return view('master.program_csr.master_bidang.create');
    }

    public function edit()
    {
        return view('master.program_csr.master_bidang.edit');
    }
}
