<?php

namespace App\Http\Controllers\Master\Perusahaan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BentukPerusahaanController extends Controller
{
    public function index()
    {
        return view('master.perusahaan.bentuk_perusahaan.index');
    }

    public function detail()
    {
        return view('master.perusahaan.bentuk_perusahaan.detail');
    }

    public function create()
    {
        return view('master.perusahaan.bentuk_perusahaan.create');
    }

    public function edit()
    {
        return view('master.perusahaan.bentuk_perusahaan.edit');
    }
}
