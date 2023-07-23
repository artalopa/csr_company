<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPerekonomianController extends Controller
{
    public function index()
    {
        return view('user.bag_perekonomian.index');
    }

    public function detail()
    {
        return view('user.bag_perekonomian.detail');
    }

    public function create()
    {
        return view('user.bag_perekonomian.create');
    }

    public function edit()
    {
        return view('user.bag_perekonomian.edit');
    }
}
