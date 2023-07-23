@extends('layouts.general')

@section('title', 'ORGANISASI PERANGKAT DAERAH (OPD)')

@section('css')
<link href="{{ asset('assets/dist/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/dist/libs/select2/css/select2custome.css') }}" rel="stylesheet" />
@endsection

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
                    <span class="fw-bolder text-grey sub_title--first">TAMBAH OPD</span>
                    <span class="sub_title--second">Tambah OPD</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card card-shadow">
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-md-5 mb-4">
                        <div class="edit-profile mb-4" style="background-image: url({{ asset('assets/images/pt-djarum.jpg') }})">
                            <div class="edit-profile-content" id="edit-photo-profile">
                                <div class="btn-edit-profile">
                                    <span>Edit Photo Profile</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                        <path d="M13.5 6.5l4 4"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 style="line-height: 2px;">PERSONAL DATA OPD</h2>
                            <div class="mb-2">
                                <label class="form-label__custome">ID OPD <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="( Otomatis )">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Nama OPD <span>*</span></label>
                                <select name="" id="" class="form-select form-select__custome">
                                    <option value="">Pilih Nama OPD</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Singkatan OPD <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Auto">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Nomor Tlp OPD <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="0291 - No Tlp Opd">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Alamat OPD <span>*</span></label>
                                <textarea class="form-control form-control__custome" placeholder="Tulis Alamat OPD"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-4">
                        <h2 style="line-height: .7">INFORMASI OPD</h2>
                        <div class="mb-2">
                            <label  class="form-label__custome">Email OPD <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Email OPD">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Website OPD <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Alamat Website OPD">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Person In Charge (PIC) <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Nama PIC OPD">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Nomor Tlp PIC <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Nomor Telephone PIC">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Username <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Username">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Password <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Password">
                        </div>
                        <div class="mb-4">
                            <label  class="form-label__custome">Retype Password <span>*</span></label>
                            <input type="email" class="form-control form-control__custome" placeholder="Password">
                        </div>
                        <h2 style="line-height: 2px;">PROFILE OPD</h2>
                        <div class="mb-2">
                            <label  class="form-label__custome">Profile OPD</label>
                            <textarea class="form-control form-control__custome" placeholder="Tulis Profile Singkat OPD"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Instagram <span>*</span></label>
                            <input type="text" class="form-control form-control__custome" placeholder="Instagram OPD">
                        </div>
                        <div class="mb-3">
                            <label class="form-label__custome">Twitter <span>*</span></label>
                            <input type="text" class="form-control form-control__custome" placeholder="Twitter OPD">
                        </div>
                        <div class="mb-3">
                            <label class="form-label__custome">Tambah Galeri Foto OPD</label>
                            <input type="file" class="form-control form-control__custome">
                        </div>
                        <div>
                            <div class="d-flex">
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                                <div class="add-gallery me-3">
                                    <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="">
                                    <span class="cancel-add-gallery">
                                        <img src="{{ asset('assets/icon/company/close.png') }}" alt="">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-green__custome" style="font-size: 1rem">SIMPAN</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Content end-->
@endsection

@section('js')
<script src="{{ asset('assets/dist/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/select2/select2.js') }}"></script>
@endsection
