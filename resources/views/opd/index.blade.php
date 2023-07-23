@extends('layouts.general')

@section('title', 'ORGANISASI PERANGKAT DAERAH (OPD)')

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">ORGANISASI PERANGKAT DAERAH (OPD)</h1>
</div>
<!-- Title end -->

<!-- Bar menu -->
@include('opd.bar_menu')
<!-- Bar menu end -->

<!-- Content -->
<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">DATA OPD</span>
                    <span class="sub_title--second">Data OPD</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="d-flex justify-content-between align-items-top">
                        <div class="sub_title">
                            <span class="fw-bolder text-grey sub_title--first">Data Organisasi Perangkat Daerah (OPD)</span>
                        </div>
                        <div class="d-flex">
                            <form action="" class="me-3">
                                <input type="search" class="form-control" placeholder="Cari OPD">
                            </form>
                            <a href="#" class="me-3 btn-block__custome">
                                <span class="btn btn-dribble__custome btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                        <path d="M9 15l3 -3l3 3"></path>
                                        <path d="M12 12l0 9"></path>
                                    </svg>
                                </span>
                                <div>
                                    <small  class="text-grey">Upload</small>
                                </div>
                            </a>
                            <a href="#" class="btn-block__custome">
                                <span class="btn btn-teal__custome btn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4"></path>
                                        <path d="M12 13l0 9"></path>
                                        <path d="M9 19l3 3l3 -3"></path>
                                    </svg>
                                </span>
                                <div>
                                    <small class="text-grey">Download</small>
                                </div>
                            </a>
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
                                    <span class="form-control">ID OPD</span>
                                </th>
                                <th>
                                    <span class="form-control">Nama OPD</span>
                                </th>
                                <th>
                                    <span class="form-control">Singkatan</span>
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
                                        <span class="form-control">OPD.123456</span>
                                    </td>
                                    <td>
                                        <span class="form-control">DINAS KESEHATAN</span>
                                    </td>
                                    <td>
                                        <span class="form-control">DINKES</span>
                                    </td>
                                    <td>
                                        <div class="form-control">
                                            <div class="d-flex">
                                                <a href="#" class=" btn btn-blue__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                                        </svg>
                                                    </span>
                                                    <small> View</small>
                                                </a>
                                                <a href="#" class=" btn btn-orange__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                    </span>
                                                    <small>Edit</small>
                                                </a>
                                                <a href="#" class=" btn btn-danger__custome d-block btn-icon__in">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </span>
                                                    <small> Delete</small>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control">2.</span>
                                    </td>
                                    <td>
                                        <span class="form-control">OPD.07876562</span>
                                    </td>
                                    <td>
                                        <span class="form-control">BADAN KEPEGAWAIAN DAERAH</span>
                                    </td>
                                    <td>
                                        <span class="form-control">BKD</span>
                                    </td>
                                    <td>
                                        <div class="form-control">
                                            <div class="d-flex">
                                                <a href="#" class=" btn btn-blue__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                                        </svg>
                                                    </span>
                                                    <small> View</small>
                                                </a>
                                                <a href="#" class=" btn btn-orange__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                    </span>
                                                    <small>Edit</small>
                                                </a>
                                                <a href="#" class=" btn btn-danger__custome d-block btn-icon__in">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </span>
                                                    <small> Delete</small>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <span class="form-control">3.</span>
                                    </td>
                                    <td>
                                        <span class="form-control">OPD.345676</span>
                                    </td>
                                    <td>
                                        <span class="form-control">DINAS KOMUNIKASI DAN INFORMATIKA</span>
                                    </td>
                                    <td>
                                        <span class="form-control">KOMINFO</span>
                                    </td>
                                    <td>
                                        <div class="form-control">
                                            <div class="d-flex">
                                                <a href="#" class=" btn btn-blue__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                                        </svg>
                                                    </span>
                                                    <small> View</small>
                                                </a>
                                                <a href="#" class=" btn btn-orange__custome d-block btn-icon__in me-3">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                            <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                            <path d="M16 5l3 3"></path>
                                                        </svg>
                                                    </span>
                                                    <small>Edit</small>
                                                </a>
                                                <a href="#" class=" btn btn-danger__custome d-block btn-icon__in">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                            <path d="M4 7l16 0"></path>
                                                            <path d="M10 11l0 6"></path>
                                                            <path d="M14 11l0 6"></path>
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                                        </svg>
                                                    </span>
                                                    <small> Delete</small>
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
<!-- Content end-->
@endsection
