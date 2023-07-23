@extends('layouts.general')

@section('title', 'Join Program CSR RKA DUKPD')

@section('content')
<!-- Title -->
<div class="col-md-12 mb-3">
    <h1 class="title-content__custome">CORPORATE SOCIAL RESPONSIBILITY (CSR)</h1>
</div>
<!-- Title end -->

<!-- Bar menu -->
@include('csr.bar_menu')
<!-- Bar menu end -->

<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div class="sub_title">
                    <span class="fw-bolder text-grey sub_title--first">JOIN PROGRAM CSR / RKA DUKPD</span>
                    <span class="sub_title--second">Gabung Program (RKA DUKPD) CSR Dari DUKPD</span>
                </div>
                <div>
                    <a href="{{ route('csr-program-rka.index') }}" class="btn-block__custome">
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
    <div class="card card-shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <!-- Rencana Kegiatan -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;">RENCANA KEGIATAN CSR OPD</h2>
                        <div class="mb-2">
                            <label class="form-label__custome">ID Usulan Program CSR</label>
                            <input type="text" class="form-control form-control__custome" disabled value="OPD.123456">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Nama OPD</label>
                            <input type="text" class="form-control form-control__custome" disabled value="DINAS KESEHATAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Status Program</label>
                            <input type="text" class="form-control form-control__custome" disabled value="Prioritas">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Bidang</label>
                            <input type="text" class="form-control form-control__custome" disabled value="BADAN KEPEGAWAIAN DAERAH">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Sub Bidang</label>
                            <input type="text" class="form-control form-control__custome" disabled value="PENYEDIAAN SARANA DAN PRASARANA DI BIDANG PENDIDIKAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Program CSR</label>
                            <input type="text" class="form-control form-control__custome" disabled value="PEMBERDAYAAN MASYARAKAT">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Nama Kegiatan</label>
                            <input type="text" class="form-control form-control__custome" disabled value="Dukungan Perusahaan Dalam Menunjang Kegiatan Operasional Pulodarat FC">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Status Kegiata</label>
                            <input type="text" class="form-control form-control__custome" disabled value="KEBERLANJUTAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Deskripsi Kegiatan</label>
                            <textarea  class="form-control form-control__custome" disabled style="height: 80px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                        </div>
                    </div>

                    <!-- Sasaran -->
                    <div class=" mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">SASARAN KEGIATAN CSR OPD</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <div class="mb-2">
                                <label class="form-label__custome">Sasaran Kegiatan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Kelompok Masyarakat">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Detail Sasaran</label>
                                <textarea  class="form-control form-control__custome" disabled style="height: 80px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Target Pemanfaat</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Lorem Ipsum is simply dummy">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Detail Target Pemanfaat</label>
                                <textarea  class="form-control form-control__custome" disabled style="height: 80px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Waktu Pelaksanaan -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">WAKTU PELAKSANAAN KEGIATAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#waktu_pelaksanaan" aria-expanded="false" aria-controls="waktu_pelaksanaan">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="waktu_pelaksanaan">
                            <div class="mb-2">
                                <label class="form-label__custome">Rencana Pelaksanaan</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control__custome" disabled value="2023">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control__custome" disabled value="Mei">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control form-control__custome" disabled value="20">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Penanggung Jawab Kegiatan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Hendrawan Kurniawan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Kontak Penanggung Jawab Kegiatan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="+6289-7678-546">
                            </div>
                        </div>
                    </div>

                    <!-- Lokasi -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">LOKASI KEGIATAN CSR OPD</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#location" aria-expanded="false" aria-controls="location">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="location">
                            <div class="mb-2">
                                <label  class="form-label__custome">Provinsi</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Jawa Tengah">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label__custome">Kabupaten</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Jepara">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label__custome">Kecamatan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Bangsri">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label__custome">Desa / Kelurahan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Tengguli">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Detail Lokasi Kegiatan</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Tengguli, RT 03 RW 01, Bangsri, Jepara, Jawa Tengah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label__custome">Deskripsi Lokasi Kegiatan</label>
                                <textarea name="" class="form-control form-control__custome" disabled style="height: 120px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- RAB -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">RENCANA ANGGARAN BIAYA</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#rab" aria-expanded="false" aria-controls="rab">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="rab">
                            <div class="mb-2">
                                <label  class="form-label__custome">Range Nominal RAB</label>
                                <input type="text" class="form-control form-control__custome" disabled value="< Rp. 10.000.000">
                            </div>
                            <div class="mb-2">
                                <label class="form-label__custome">Nomial RAB</label>
                                <input type="text" class="form-control form-control__custome" disabled value="Rp. 250.000.000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label__custome">RAB RKA DUKPD</label>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Perbaikan Jalan">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="1 Unit">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Rp. 200.000.000">
                                    </div>
                                </div>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Tenaga Kerja">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="10 Orang">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Rp. 30.000.000">
                                    </div>
                                </div>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Lain Lain">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="1 Unit">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control form-control__custome" disabled value="Rp. 20.000.000">
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control__custome form-control__green" disabled value="Total RAB">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control__custome form-control__green" id="total-rab" disabled value="Rp. 250.000.000">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Skor -->
                     <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">PERKIRAAN SKOR USULAN PROGRAM</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#skor" aria-expanded="false" aria-controls="skor">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="skor">
                            <div>
                                <label class="form-label__custome">Perkiraan Skor (Maksimal 100) <span>*</span></label>
                                <input type="text" class="form-control form-control__custome" disabled value="98">
                            </div>
                        </div>
                    </div>

                    <!-- lampiran File -->
                    <div>
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">LAMPIRAN FILE KEGIATAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#file_rab" aria-expanded="false" aria-controls="file_rab">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="file_rab">
                            <div class="mb-2">
                                <label class="form-label__custome">Lampiran File Kegiatan</label>
                                <div class="row g-1">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control form-control__custome" disabled value="rencana-rab-rka-dukpd.pdf">
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:void(0)" class="btn btn-orange__custome w-100 h-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path>
                                            </svg> &nbsp;
                                            View
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Pilih Perusahaan -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;">DATA PERUSAHAAN</h2>
                        <div class="mb-2">
                            <label class="form-label__custome">Pilih Perusahaan</label>
                            <select name="" class="form-select form-select__custome">
                                <option value="" disabled selected>Pilih Perusahaan Untuk Join dengan Program CSR / RKA DUKPD</option>
                                <option value="">PT. Indah Jaya Abadi</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">ID Perusahaan</label>
                            <input type="text" class="form-control form-control__custome" disabled value="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Alamat</label>
                            <input type="text" class="form-control form-control__custome" disabled value="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Nomor Telephone</label>
                            <input type="text" class="form-control form-control__custome" disabled value="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Email</label>
                            <input type="text" class="form-control form-control__custome" disabled value="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label__custome">Asset Perusahaan</label>
                            <input type="text" class="form-control form-control__custome" disabled value="(Otomatis)">
                        </div>
                    </div>

                    <!-- Join Program -->
                    <div class="mb-4">
                        <h2 style="line-height: 10px;">JOIN PROGRAM CSR OPD (DUKPD)</h2>
                        <div class="mb-2">
                            <label class="form-label__custome">Kontribusi</label>
                            <div class="row g-1">
                                <div class="col-md-10">
                                    <select name="" id="contribution_select" class="form-select form-select__custome">
                                        <option value="" disabled selected>Kontribusi Penuh, Bagian, Custome</option>
                                        <option value="penuh">Penuh</option>
                                        <option value="bagian">Bagian</option>
                                        <option value="custome">Custome</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <a href="javascript:void(0)" class="btn btn-purple__custome w-100 h-100" id="lock">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z"></path>
                                            <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                            <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                        </svg> &nbsp;
                                        <span id="lock-text">Lock</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div id="contribution_list">

                        </div>
                    </div>

                    <!-- Btn Simpan -->
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-green__custome" style="padding-right: 2rem; padding-left: 2rem; font-size: 20px;">SIMPAN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')

<script>
    var contribution_select = document.getElementById("contribution_select");
    var lock = document.getElementById("lock");
    lock.addEventListener("click", function() {
        if (contribution_select.value == 'penuh') {
            html =  "<label class='form-label__custome'>RAB RKA DUKPD</label>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Perbaikan Jalan'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='1 Unit'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 200.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100' disabled checked>\
                        </div>\
                    </div>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Tenaga Kerja'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='10 Orang'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 30.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100' disabled checked>\
                        </div>\
                    </div>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Lain Lain'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='1 Unit'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 20.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100' disabled checked>\
                        </div>\
                    </div>\
                    <div class='row g-1'>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome form-control__green' disabled value='Total Kontribusi'>\
                        </div>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome form-control__green' id='total-rab' disabled value='Rp. 250.000.000'>\
                        </div>\
                    </div>";
        } else if (contribution_select.value == 'bagian') {
            html =  "<label class='form-label__custome'>RAB RKA DUKPD</label>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Perbaikan Jalan'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='1 Unit'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 200.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100'>\
                        </div>\
                    </div>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Tenaga Kerja'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='10 Orang'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 30.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100'>\
                        </div>\
                    </div>\
                    <div class='row g-1 mb-1'>\
                        <div class='col-md-4 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Lain Lain'>\
                        </div>\
                        <div class='col-md-2 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='1 Unit'>\
                        </div>\
                        <div class='col-md-5 mb-1'>\
                            <input type='text' class='form-control form-control__custome' disabled value='Rp. 20.000.000'>\
                        </div>\
                        <div class='col-md-1 mb-1'>\
                            <input type='checkbox' class='form-check-input h-100 w-100'>\
                        </div>\
                    </div>\
                    <div class='row g-1'>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome form-control__green' disabled value='Total Kontribusi'>\
                        </div>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome form-control__green' id='total-rab' disabled value='Rp. 250.000.000'>\
                        </div>\
                    </div>";
        } else {
            html = "<div class='row g-1'>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome form-control__green' disabled value='Total Kontribusi'>\
                        </div>\
                        <div class='col-md-6'>\
                            <input type='text' class='form-control form-control__custome' id='total-rab' placeholder='Rp.'>\
                        </div>\
                    </div>";
        }

        $("#contribution_list").html(html);
        contribution_select.setAttribute("disabled", "disable");

        lock.setAttribute("class", "btn btn-danger__custome w-100 h-100")
        lock.setAttribute("id", "unlock");
        $("#lock-text").html("Unlock");

    });
</script>

@endsection
