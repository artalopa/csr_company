@extends('layouts.general')

@section('title', 'Penguna')

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">PENGGUNA APLIKASI SIMONCER</h1>
</div>
<!-- Title end -->

<!-- Bar menu -->
@include('master.bar_menu')
<!-- Bar menu end -->

<!-- Content -->
<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">DETAIL BAGIAN MASTER OPD</span>
                    <span class="sub_title--second">Detail Data Bagian Master OPD </span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('master-opd.index') }}" class="btn-block__custome">
                        <span class="btn btn-red-dark__custome btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M13 15l-3 -3l3 -3"></path>
                                <path d="M21 12a9 9 0 1 0 -18 0a9 9 0 0 0 18 0z"></path>
                            </svg>
                        </span>
                        <div>
                            <small class="text-grey">Kembali</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row row-deck">
        <div class="col-md-4 mb-3">
            <div class="card card-shadow">
                <img src="{{ asset('assets/images/profile/profile.jpg') }}" alt="" class="profile-img">
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-shadow">
                <div class="card-body">
                    <h2>INFORMASI DATA</h2>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label class="form-label__custome">ID Master OPD</label>
                            <input type="text" class="form-control form-control__profile" disabled value="OPD.1234567">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label__custome">Nama Master OPD</label>
                            <input type="text" class="form-control form-control__profile" disabled value="DINAS KESEHATAN">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label__custome">Singkatan</label>
                            <input type="text" class="form-control form-control__profile" disabled value="DINKES">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label__custome">Nomor Telephone</label>
                            <input type="text" class="form-control form-control__profile" disabled value="0291-456-2765">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label__custome">Alamat</label>
                            <input type="text" class="form-control form-control__profile" disabled value="Jl. Pemuda No.5">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label__custome">Email</label>
                            <input type="text" class="form-control form-control__profile" disabled value="dinkes@jepara.go.id">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card-shadow">
                <div class="card-body">
                    <h2>INFORMASI DIGITAL</h2>
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label class="form-label__custome">Website</label>
                            <input type="text" class="form-control form-control__profile" disabled value="dinkes.jepara.go.id">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label__custome">Instagram</label>
                            <input type="text" class="form-control form-control__profile" disabled value="@dikesjepara">
                        </div>
                        <div class="col-md-12 mb-2">
                            <label class="form-label__custome">Twitter</label>
                            <input type="text" class="form-control form-control__profile" disabled value="#dinkesjepara">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label__custome">Facebook</label>
                            <input type="text" class="form-control form-control__profile" disabled value="dinkesjepara">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content end-->
@endsection
