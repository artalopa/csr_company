<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOpdController extends Controller
{
    public function index()
    {
        return view('user.opd.index');
    }

    public function detail()
    {
        return view('user.opd.detail');
    }

    public function create()
    {
        return view('user.opd.create');
    }

    public function edit()
    {
        return view('user.opd.edit');
    }
}
