@extends('layouts.general')

@section('title', 'CSR')

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">CORPORATE SOCIAL RESPONSIBILITY (CSR)</h1>
</div>
<!-- Title end -->

@include('csr.bar_menu')

<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">DATA DPA CSR (DPA DUKPD)</span>
                    <span class="sub_title--second">Data Pelaksanaan Program CSR OPD (DPA DUKPD)</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('dpa-dp4.index') }}" class="me-2 btn-block__custome">
                        <span class="btn btn-green__custome btn-icon">
                            <img src="{{ asset('assets/icon/csr/company.png') }}" alt="" class="icon">
                        </span>
                        <div>
                            <small class="text-grey">
                                <p>DPA DP4 <br> (Program Perusahaan)</p>
                            </small>
                        </div>
                    </a>
                    <a href="{{ route('dpa-dukpd.index') }}" class="me-2 btn-block__custome">
                        <span class="btn btn-purple__custome btn-icon">
                            <img src="{{ asset('assets/icon/csr/tambah_usulan_opd_white.png') }}" alt="" class="icon">
                        </span>
                        <div>
                            <small class="text-grey">
                                <p>DPA DUKPD <br> (Program OPD)</p>
                            </small>
                        </div>
                    </a>
                    <a href="{{ route('dpa.index') }}" class="btn-block__custome">
                        <span class="btn btn-blue__custome btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-open" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 19l2.757 -7.351a1 1 0 0 1 .936 -.649h12.307a1 1 0 0 1 .986 1.164l-.996 5.211a2 2 0 0 1 -1.964 1.625h-14.026a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v2"></path>
                            </svg>
                        </span>
                        <div>
                            <small class="text-grey">
                                <p>Data Pelaksanaan <br> Program CSR</p>
                            </small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="sub_title">
                                <span class="fw-bolder text-grey sub_title--first">Data Pelaksanaan Program CSR OPD (DPA DUKPD)</span>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="d-flex justify-content-end">
                                <form action="" class="me-3" style="width: 40%;">
                                    <input type="search" class="form-control form-control__search" placeholder="Cari DPA DUKPD">
                                </form>
                                <a href="#" class="btn-block__custome">
                                    <span class="btn btn-orange__custome btn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-adjustments-horizontal" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M4 6l8 0"></path>
                                            <path d="M16 6l4 0"></path>
                                            <path d="M8 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M4 12l2 0"></path>
                                            <path d="M10 12l10 0"></path>
                                            <path d="M17 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                            <path d="M4 18l11 0"></path>
                                            <path d="M19 18l1 0"></path>
                                        </svg>
                                    </span>
                                    <div>
                                        <small  class="text-grey">Filter</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <thead>
                                <th class="start" style="width: 5%;">
                                    <span class="form-control">No</span>
                                </th>
                                <th>
                                    <span class="form-control">ID Program</span>
                                </th>
                                <th>
                                    <span class="form-control">Nama Program CSR</span>
                                </th>
                                <th>
                                    <span class="form-control">Status</span>
                                </th>
                                <th class="end" style="width: 15%;">
                                    <span class="form-control">Action</span>
                                </th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control">1.</span>
                                    </td>
                                    <td>
                                        <span class="form-control">DUKPD1234567</span>
                                    </td>
                                    <td>
                                        <span class="form-control text-uppercase">Bantuan Sembako</span>
                                    </td>
                                    <td>
                                        <span class="form-control text-uppercase">Terlaksana</span>
                                    </td>
                                    <td>
                                        <div class="form-control">
                                            <div class="d-flex justify-content-center">
                                                <a href="#" class=" btn btn-blue__custome d-block btn-icon__in">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M5 12l5 5l10 -10"></path>
                                                        </svg>
                                                    </span>
                                                    <small> Validasi</small>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
