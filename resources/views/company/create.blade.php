@extends('layouts.general')

@section('title', 'Tambah Perusahaan')

@section('css')
<link href="{{ asset('assets/dist/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/dist/libs/select2/css/select2custome.css') }}" rel="stylesheet" />
@endsection

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">PERUSAHAAN</h1>
</div>
<!-- Title end -->

<!-- Bar menu -->
@include('company.bar_menu')
<!-- Bar menu end -->

<!-- Content -->
<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">TAMBAH PERUSAHAAN</span>
                    <span class="sub_title--second">Tambah Perusaaan Pelaksana CSR</span>
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
                            <h2 style="line-height: 2px;">PERSONAL DATA PERUSAHAAN</h2>
                            <div class="mb-2">
                                <label class="form-label__custome">ID Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="( Otomatis )">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Nama Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Tulis Nama Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Telephone Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Nomor Telephone Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Email Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Email Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Website Perusahaan</label>
                                <input type="text" class="form-control form-control__custome" placeholder="Website Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Person In Charge (PIC) <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Nama PIC">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Kontak PIC <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Nomor Telephone PIC">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Username <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" placeholder="Username">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Password <span>*</span></label>
                                <input type="password" class="form-control form-control__custome" placeholder="Password">
                            </div>
                            <div>
                                <label class="form-label__custome">Retype Password <span>*</span></label>
                                <input type="password" class="form-control form-control__custome" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-4">
                        <h2 style="line-height: .7">DATA LOKASI PERUSAHAAN</h2>
                        <div class="row mb-4">
                            <label class="form-label__custome">Alamat Perusahaan<span>*</span></label>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">Provinsi</label>
                                    <select name="" id="" class="form-select form-select__custome">
                                        <option value="">Jawa Tengah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">Kabupaten</label>
                                    <select name="" id="" class="form-select form-select__custome">
                                        <option value="">Jepara</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">Kecamatan</label>
                                    <select class="select-subdistrict form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">Jepara</option>
                                        <option value="AL">Tahunan</option>
                                        <option value="AL">Bangsri</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">Desa / Kelurahan</label>
                                    <select class="select-village form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">Bangsri</option>
                                        <option value="AL">Tengguli</option>
                                        <option value="AL">Jambu Timur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">Dusun</label>
                                    <select class="select-sub-village form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">Bangsri</option>
                                        <option value="AL">Tengguli</option>
                                        <option value="AL">Jambu Timur</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">RW</label>
                                    <select class="select-rw form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">01</option>
                                        <option value="AL">02</option>
                                        <option value="AL">03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <div>
                                    <label  class="form-label__custome">RT</label>
                                    <select class="select-rt form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">01</option>
                                        <option value="AL">02</option>
                                        <option value="AL">03</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-1">
                                <label class="form-label__custome">Nama Jalan</label>
                                <input type="text" class="form-control form-control__custome" placeholder="Nama Jalan">
                            </div>
                        </div>
                        <h2 style="line-height: 2px;">LEGALITAS DATA PERUSAHAAN</h2>
                        <div class="mb-2">
                            <label  class="form-label__custome">Status Badan Hukum <span>*</span></label>
                            <select name="" id="" class="form-select form-select__custome">
                                <option value="">Pilih Status Badan Hukum</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Bentuk Perusahaan <span>*</span></label>
                            <select name="" id="" class="form-select form-select__custome">
                                <option value="">Pilih Bentuk Perusahaan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">NPWP Perusahaan <span>*</span></label>
                            <input type="text" class="form-control form-control__custome" placeholder="Isi NPWP Perusahaan">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">NIB Perusahaan <span>*</span></label>
                            <input type="text" class="form-control form-control__custome" placeholder="Isi NIB Perusahaan">
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">KBLI Perusahaan <span>*</span></label>
                            <select name="" id="" class="form-select form-select__custome">
                                <option value="">Pilih KBLI Perusahaan</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Status Penanaman Modal Perusahaan <span>*</span></label>
                            <select name="" id="" class="form-select form-select__custome">
                                <option value="">Pilih Status Penanaman Modal Perusahaan</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label  class="form-label__custome">Nilai Asset Perusahaan</label>
                            <input type="text" class="form-control form-control__custome" placeholder="Tulis Nilai Asset Perusahaan">
                        </div>
                        <h2 style="line-height: 2px;">PROFILE PERUSAHAAN</h2>
                        <div class="mb-2">
                            <label  class="form-label__custome">Profile Perusahaan</label>
                            <textarea class="form-control form-control__custome" placeholder="Tulis Profile Singkat Perusahaan"></textarea>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Area Lingkar 1 Terdampak</label>
                            <select class="select-lingkar-1 form-select2__custome" name="state">
                                <option value=""></option>
                                <option value="AL">01</option>
                                <option value="AL">02</option>
                                <option value="AL">03</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label  class="form-label__custome">Area Lingkar 2 Terdampak</label>
                            <select class="select-lingkar-2 form-select2__custome" name="state">
                                <option value=""></option>
                                <option value="AL">01</option>
                                <option value="AL">02</option>
                                <option value="AL">03</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label__custome">Tambah Galeri Foto Perusahaan</label>
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
