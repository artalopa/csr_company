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
                <div class="sub_title" style="max-width: 50%;">
                    <span class="fw-bolder text-grey sub_title--first">VALIDASI PROGRAM BANTUAN PERAWATAN KENDARAAN OPERASIONAL POLSEK PECANGAAN</span>
                    <span class="sub_title--second">PT. Kanindo Jaya</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('dpa-dp4.index') }}" class="btn-block__custome">
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

<div class="col-md-12 mb-3">
    <div class="row row-deck">
        <div class="col-md-6">
            <div class="card card-grey">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="card me-1" style="width: 40%;">
                                <div class="card-body">
                                    <h2>VALIDASI PROGRAM BANTUAN PERAWATAN KENDARAAN OPERASIONAL POLSEK PECANGAAN</h2>
                                </div>
                            </div>
                            <div>
                                <button disabled class="btn btn-green__custome h-100">DPA <br> DP4</button>
                            </div>
                        </div>
                    </div>
                    <!-- Rencana Kegiatan -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;">RENCANA KEGIATAN CSR OPD</h2>
                        <div class="mb-2">
                            <label class="form-label">ID Usulan Program CSR</label>
                            <input type="text" class="form-control" disabled value="OPD.123456">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Nama OPD</label>
                            <input type="text" class="form-control" disabled value="DINAS KESEHATAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Status Program</label>
                            <input type="text" class="form-control" disabled value="Prioritas">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Bidang</label>
                            <input type="text" class="form-control" disabled value="BADAN KEPEGAWAIAN DAERAH">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Sub Bidang</label>
                            <input type="text" class="form-control" disabled value="PENYEDIAAN SARANA DAN PRASARANA DI BIDANG PENDIDIKAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Program CSR</label>
                            <input type="text" class="form-control" disabled value="PEMBERDAYAAN MASYARAKAT">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Nama Kegiatan</label>
                            <input type="text" class="form-control" disabled value="Dukungan Perusahaan Dalam Menunjang Kegiatan Operasional Pulodarat FC">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Status Kegiata</label>
                            <input type="text" class="form-control" disabled value="KEBERLANJUTAN">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Deskripsi Kegiatan</label>
                            <textarea  class="form-control" disabled style="height: 150px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
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
                                <label class="form-label">Sasaran Kegiatan</label>
                                <input type="text" class="form-control" disabled value="Kelompok Masyarakat">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Detail Sasaran</label>
                                <textarea  class="form-control" disabled style="height: 150px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Target Pemanfaat</label>
                                <input type="text" class="form-control" disabled value="Lorem Ipsum is simply dummy">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Detail Target Pemanfaat</label>
                                <textarea  class="form-control" disabled style="height: 150px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
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
                                <label class="form-label">Rencana Pelaksanaan</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" disabled value="2023">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" disabled value="Mei">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" disabled value="20">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Penanggung Jawab Kegiatan</label>
                                <input type="text" class="form-control" disabled value="Hendrawan Kurniawan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Kontak Penanggung Jawab Kegiatan</label>
                                <input type="text" class="form-control" disabled value="+6289-7678-546">
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
                                <label  class="form-label">Provinsi</label>
                                <input type="text" class="form-control" disabled value="Jawa Tengah">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label">Kabupaten</label>
                                <input type="text" class="form-control" disabled value="Jepara">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" disabled value="Bangsri">
                            </div>
                            <div class="mb-2">
                                <label  class="form-label">Desa / Kelurahan</label>
                                <input type="text" class="form-control" disabled value="Tengguli">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Detail Lokasi Kegiatan</label>
                                <input type="text" class="form-control" disabled value="Tengguli, RT 03 RW 01, Bangsri, Jepara, Jawa Tengah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi Lokasi Kegiatan</label>
                                <textarea name="" class="form-control" disabled style="height: 120px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</textarea>
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
                                <label  class="form-label">Range Nominal RAB</label>
                                <input type="text" class="form-control" disabled value="< Rp. 10.000.000">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nomial RAB</label>
                                <input type="text" class="form-control" disabled value="Rp. 250.000.000">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">RAB RKA DUKPD</label>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control" disabled value="Perbaikan Jalan">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control" disabled value="1 Unit">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control" disabled value="Rp. 200.000.000">
                                    </div>
                                </div>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control" disabled value="Tenaga Kerja">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control" disabled value="10 Orang">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control" disabled value="Rp. 30.000.000">
                                    </div>
                                </div>
                                <div class="row g-1 mb-1">
                                    <div class="col-md-4 mb-1">
                                        <input type="text" class="form-control" disabled value="Lain Lain">
                                    </div>
                                    <div class="col-md-2 mb-1">
                                        <input type="text" class="form-control" disabled value="1 Unit">
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <input type="text" class="form-control" disabled value="Rp. 20.000.000">
                                    </div>
                                </div>
                                <div class="row g-1">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control__green" disabled value="Total RAB">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control form-control__green" id="total-rab" disabled value="Rp. 250.000.000">
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
                                <label class="form-label">Perkiraan Skor (Maksimal 100) <span>*</span></label>
                                <input type="text" class="form-control" disabled value="98">
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
                                <label class="form-label">Lampiran File Kegiatan</label>
                                <div class="row g-1">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled value="rencana-rab-rka-dukpd.pdf">
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
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-grey">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <div class="card me-1" style="width: 40%;">
                                <div class="card-body">
                                    <h2>VALIDASI PROGRAM BANTUAN PERAWATAN KENDARAAN OPERASIONAL POLSEK PECANGAAN</h2>
                                </div>
                            </div>
                            <div>
                                <button disabled class="btn btn-validation h-100">VALIDASI</button>
                            </div>
                        </div>
                    </div>

                    <!-- Waktu Pelaksanaan Program -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;">WAKTU PELAKSANAAN KEGIATAN</h2>
                        <div class="mb-2">
                            <label class="form-label">Rencana Pelaksanaan</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="" class="form-select form-select__custome">
                                        <option disabled selected value="">Pilih Tahun</option>
                                        <option value="">2023</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="" class="form-select form-select__custome">
                                        <option disabled selected value="">Pilih Bulan</option>
                                        <option value="">Januari</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name="" class="form-select form-select__custome">
                                        <option disabled selected value="">Pilih Tanggal</option>
                                        <option value="">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Hari Pelaksanaan</label>
                            <input type="text" class="form-control" disabled placeholder="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" placeholder="Tulis Keterangan">
                        </div>
                    </div>

                    <!-- Sasaran Pelaksanaan Program -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">Sasaran Kegiatan Csr Perusahaan</h2>
                        <div class="mb-2">
                            <label class="form-label">Kesesuian Sasaran</label>
                            <select class="form-select">
                                <option value="" disabled selected>Pilih Kesesuian Sasaran (Sesuai / Tidak Sesuai)</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan Sasaran</label>
                            <textarea name="" class="form-control" placeholder="Tulis Keterangan Sasaran" style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Kesesuian Target Pemanfaat</label>
                            <select class="form-select">
                                <option value="" disabled selected>Pilih Kesesuian Target Pemanfaat (Sesuai / Tidak Sesuai)</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan Target Pemanfaat</label>
                            <textarea name="" class="form-control" placeholder="Tulis Keterangan Target Pemanfaat" style="height: 100px;"></textarea>
                        </div>
                    </div>

                    <!-- Lokasi Kegiatan -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">Lokasi Kegiatan Csr Perusahaan</h2>
                        <div class="mb-2">
                            <label class="form-label">Kesesuaian Lokasi Kegiatan</label>
                            <select class="form-select">
                                <option value="" disabled selected>Pilih Kesesuaian Lokasi Kegiatan (Sesuai / Tidak Sesuai)</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan Lokasi Kegiatan</label>
                            <textarea name="" class="form-control" placeholder="Tulis Keterangan Lokasi Kegiatan" style="height: 100px;"></textarea>
                        </div>
                    </div>

                    <!-- Penggunaan Anggaran -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">Penggunaan Anggaran Kegiatan</h2>
                        <div class="mb-2">
                            <label class="form-label">Rencana Anggaran Biaya</label>
                            <input type="text" class="form-control" placeholder="(Otomatis)">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Total Anggaran Yang Digunakan</label>
                            <input type="text" class="form-control" placeholder="Tulis Total Anggaran Yang Digunakan">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan Penggunaan Anggaran</label>
                            <textarea name="" class="form-control" placeholder="Tulis Keterangan Penggunaan Anggaran" style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">lampiran Laporan Keuangan</label>
                            <div class="row g-1 mb-2">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled value="Pilih File (Doc, Pdf)">
                                    <input type="file" id="file-upload" hidden>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-add__upload h-100 w-100" id="upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                            <path d="M9 15l3 -3l3 3"></path>
                                            <path d="M12 12l0 9"></path>
                                        </svg>
                                        Upload
                                    </button>
                                </div>
                            </div>
                            <div class="row g-1" id="show-file-upload">

                            </div>
                        </div>
                    </div>

                    <!-- Sumber Anggaran -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">SUMBER ANGGARAN KEGIATAN CSR PERUSAHAAN</h2>
                        <div class="mb-2">
                            <div class="row g-1">
                                <div class="col-md-6">
                                    <label class="form-label">Nama Perusahaan</label>
                                    <input type="text" class="form-control" disabled value="PT. Kanindo">
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Nominal</label>
                                    <input type="text" disabled class="form-control" value="RP. 250.000.000">
                                </div>
                                <div class="col-md-1">
                                    <label class="form-label-small">Validasi</label>
                                    <span class="btn btn-blue__custome btn-icon btn-check-small">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Keterangan Sumber Anggaran</label>
                            <textarea name="" class="form-control" placeholder="Tulis Keterangan Sumber Anggaran" style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Lampiran Laporan Keuangan</label>
                            <div class="row g-1 mb-2">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled value="Pilih File (Doc, Pdf)">
                                    <input type="file" id="file-upload" hidden>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-add__upload h-100 w-100" id="upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                            <path d="M9 15l3 -3l3 3"></path>
                                            <path d="M12 12l0 9"></path>
                                        </svg>
                                        Upload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Resume Kegiatan -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">RESUME KEGIATAN CSR PERUSAHAAN</h2>
                        <div class="mb-2">
                            <label class="form-label">Resume & Evaluasi Kegiatan</label>
                            <textarea name="" class="form-control" placeholder="Tulis Resume & Evaluasi Kegiatan" style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Lampiran Laporan Kegiatan</label>
                            <div class="row g-1 mb-2">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled value="Pilih File (Doc, Pdf)">
                                    <input type="file" id="file-upload" hidden>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-add__upload h-100 w-100" id="upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                            <path d="M9 15l3 -3l3 3"></path>
                                            <path d="M12 12l0 9"></path>
                                        </svg>
                                        Upload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Dokumentasi -->
                    <div class="mb-3">
                        <h2 style="line-height: 10px;" class="text-uppercase">DOKUMENTASI DAN BERITA KEGIATAN CSR PERUSAHAAN</h2>
                        <div class="mb-2">
                            <label class="form-label">Berita Kegiatan CSR</label>
                            <textarea name="" class="form-control" placeholder="Tulis Berita Kegiatan CSR" style="height: 100px;"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Lampiran File Dokumentasi Kegiatan</label>
                            <div class="row g-1 mb-2">
                                <div class="col-md-10">
                                    <input type="text" class="form-control" disabled value="Pilih File (Doc, Pdf)">
                                    <input type="file" id="file-upload" hidden>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-add__upload h-100 w-100" id="upload">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cloud-upload" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1"></path>
                                            <path d="M9 15l3 -3l3 3"></path>
                                            <path d="M12 12l0 9"></path>
                                        </svg>
                                        Upload
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Validasi Btn  -->
                    <div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-green__custome" style="padding-right: 2rem; padding-left: 2rem; font-size: 20px;">VALIDASI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var upload = document.getElementById("upload");
    var fileUpload = document.getElementById("file-upload");
    upload.addEventListener("click", function() {
       fileUpload.click();
    });

    fileUpload.addEventListener("change", function(e) {
        html = "<div class='col-md-10'>\
                    <input type='text' class='form-control' name='file' disabled value='"+e.target.value+"'>\
                </div>\
                <div class='col-md-2'>\
                    <button class='btn btn-danger__custome h-100 w-100'  id='cancel'>\
                        <img src='http://127.0.0.1:8000/assets/icon/csr/cancel_white.png' alt='' class='icon'>\
                        Cancel\
                    </button>\
                </div>";

        $("#show-file-upload").html(html);

        var cancel = document.getElementById("cancel");
        cancel.addEventListener("click", function() {
            $("#show-file-upload").html("");
        });
    });
</script>
@endsection
