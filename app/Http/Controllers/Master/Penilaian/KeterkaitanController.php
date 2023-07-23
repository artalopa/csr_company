<?php

namespace App\Http\Controllers\Master\Penilaian;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeterkaitanController extends Controller
{
    public function index()
    {
        return view('master.penilaian.keterkaitan.index');
    }
}
