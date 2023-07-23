<?php

namespace App\Http\Controllers\Master\ProgramCsr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterSubBidangController extends Controller
{
    public function index()
    {
        return view('master.program_csr.master_sub_bidang.index');
    }

    public function detail()
    {
        return view('master.program_csr.master_sub_bidang.detail');
    }

    public function create()
    {
        return view('master.program_csr.master_sub_bidang.create');
    }

    public function edit()
    {
        return view('master.program_csr.master_sub_bidang.edit');
    }
}
