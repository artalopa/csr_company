<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCompanyController extends Controller
{
    public function index()
    {
        return view('user.perusahaan.index');
    }

    public function detail()
    {
        return view('user.perusahaan.detail');
    }

    public function create()
    {
        return view('user.perusahaan.create');
    }

    public function edit()
    {
        return view('user.perusahaan.edit');
    }
}
