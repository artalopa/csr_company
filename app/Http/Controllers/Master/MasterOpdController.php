<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterOpdController extends Controller
{
    public function index()
    {
        return view('master.master_opd.index');
    }

    public function detail()
    {
        return view('master.master_opd.detail');
    }

    public function create()
    {
        return view('master.master_opd.create');
    }

    public function edit()
    {
        return view('master.master_opd.edit');
    }
}
