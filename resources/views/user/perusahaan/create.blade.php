@extends('layouts.general')

@section('title', 'Penguna')

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">PENGGUNA APLIKASI SIMONCER</h1>
</div>
<!-- Title end -->

<!-- Bar menu -->
@include('user.bar_menu')
<!-- Bar menu end -->

<!-- Content -->
<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">TAMBAH ADMIN PERUSAHAAN</span>
                    <span class="sub_title--second">Tambah Data Admin Perusahaan</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('admin-company.index') }}" class="btn-block__custome">
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
    <form action="">
        <div class="row row-deck">
            <div class="col-md-4 mb-3">
                <div class="card card-shadow" style="position: relative">
                    <img src="{{ asset('assets/images/profile/profile.jpg') }}" alt="" class="profile-img">
                    <div class="edit-profile-content" id="edit-photo-profile">
                        <div class="btn-edit-profile">
                            <span>Upload Photo Profile</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M4 20h4l10.5 -10.5a1.5 1.5 0 0 0 -4 -4l-10.5 10.5v4"></path>
                                <path d="M13.5 6.5l4 4"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>PERSONAL DATA</h2>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">ID Admin Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="ADM.1234567">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">Nama Admin Perusahaan <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="Tulis Nama Admin">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">Nomor Telephone <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="Tulis Nomor Telephone">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">Alamat <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="Tulis Alamat">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">Email <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="Tulis Email">
                            </div>
                            <div class="col-md-6 mb-2">
                                <label class="form-label__custome">Kedudukan / Jabatan <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" placeholder="Tulis Kedududkan / Jabatan">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label__custome">Lokasi File Upload ( otomatis )</label>
                                <input type="file" name="photo" id="photo" hidden>
                                <input id="photo-location" type="text" class="form-control form-control__profile form-control-disable-file-location" disabled value="(Otomatis)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>HAK AKSES</h2>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">Username</label>
                                <input type="text" class="form-control form-control__profile" placeholder="Username">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">Password</label>
                                <input type="text" class="form-control form-control__profile" placeholder="Password">
                            </div>
                            <div class="col-md-12 mb-4">
                                <label class="form-label__custome">Retype Password</label>
                                <input type="text" class="form-control form-control__profile" placeholder="Password">
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-green__custome">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Content end-->
@endsection

@section('js')
<script>
    var btn_upload = document.getElementById("edit-photo-profile");
    var fileInputPhoto = document.getElementById("photo");
    var locationFile = document.getElementById("photo-location");
    btn_upload.addEventListener("click", function() {
        fileInputPhoto.click();
    });

    fileInputPhoto.addEventListener("change", function(e) {
        locationFile.value = e.target.value;
    });
</script>
@endsection
