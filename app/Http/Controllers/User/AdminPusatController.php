<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPusatController extends Controller
{
    public function index()
    {
        return view('user.admin_pusat.index');
    }

    public function detail()
    {
        return view('user.admin_pusat.detail');
    }

    public function create()
    {
        return view('user.admin_pusat.create');
    }

    public function edit()
    {
        return view('user.admin_pusat.edit');
    }
}
