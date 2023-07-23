<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPengawasController extends Controller
{
    public function index()
    {
        return view('user.pengawas.index');
    }

    public function detail()
    {
        return view('user.pengawas.detail');
    }

    public function create()
    {
        return view('user.pengawas.create');
    }

    public function edit()
    {
        return view('user.pengawas.edit');
    }
}
