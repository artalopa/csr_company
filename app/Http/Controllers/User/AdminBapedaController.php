<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBapedaController extends Controller
{
    public function index()
    {
        return view('user.bapeda.index');
    }

    public function detail()
    {
        return view('user.bapeda.detail');
    }

    public function create()
    {
        return view('user.bapeda.create');
    }

    public function edit()
    {
        return view('user.bapeda.edit');
    }
}
