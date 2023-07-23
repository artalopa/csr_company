<?php

namespace App\Http\Controllers\Csr\UsulanProgram;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsulanProgramController extends Controller
{
    public function index()
    {
        return view('csr.usulan_program.index');
    }

    public function create_usulan_opd()
    {
        return view('csr.usulan_program.create_usulan_opd');
    }

    public function create_usulan_perusahaan()
    {
        return view('csr.usulan_program.create_usulan_perusahaan');
    }

    public function store(Request $request)
    {
        $nominal_rab = (int)str_replace(".", "", explode(" ", $request->nominal_rab)[1]);
        $data = [
            'code' => $request->code,
            'user_code' => $request->user_code,
            'name' => $request->name,
            'kbli_sector_code' => $request->kbli_sector_code,
            'kbli_sub_sector_code' => $request->kbli_sub_sector_code,
            'master_program_code' => $request->master_program_code,
            'status_kegiatan' => $request->status_kegiatan,
            'description' => $request->description,
            'sasaran' => $request->sasaran,
            'detail_sasaran' => $request->detail_sasaran,
            'target_pemanfaat' => $request->target_pemanfaat,
            'detail_target_pemanfaat' => $request->detail_target_pemanfaat,
            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
            'pj' => $request->pj,
            'pj_phone' => $request->pj_phone,
            'master_nominal_code' => $request->master_nominal_code,
            'nominal_rab' => $nominal_rab,
        ];

        // dd($nominal_rab);

        return Http::withHeaders([
            'token' => env('API_TOKEN_COMPANY')
        ])->post(env('API_URL_COMPANY') . '/usulan/store', $data);
    }
}
