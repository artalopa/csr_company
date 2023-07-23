@extends('layouts.general')

@section('title', 'CSR')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: .3rem .8rem;
        margin: 1rem 0;
        border-radius: 4px;
    }
</style>
@endsection

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
                    <span class="fw-bolder text-grey sub_title--first">PT. TERAS CODING INDONESIA</span>
                    <span class="sub_title--second">Data Pelaksanaan Program CSR Berdasarkan Perusahaan</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('dpa.index') }}" class="btn-block__custome">
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
        <div class="col-md-4">
            <div class="card card-grey">
                <div class="card-body">
                    <!-- Gambar Kegiatan -->
                    <div class="mb-3">
                        <img src="{{ asset('assets/images/pt-djarum.jpg') }}" alt="" style="width: 100%; border-radius:4px;" height="450">
                    </div>

                    <!-- Informasi Data Perushaan -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">PERSONAL DATA PERUSAHAAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#personal-data" aria-expanded="false" aria-controls="personal-data">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse show" id="personal-data">
                            <div class="mb-2">
                                <label class="form-label">ID Perusahaan</label>
                                <input type="text" disabled class="form-control" value="P.012345">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama Perusahaan</label>
                                <input type="text" disabled class="form-control" value="PT. TERAS CODING INDONESIA">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nomor Telephone Perusahaan</label>
                                <input type="text" disabled class="form-control" value="0291-8767-234">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Email Perusahaan</label>
                                <input type="text" disabled class="form-control" value="terascoding@terascoding.id">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Website Perusahaan</label>
                                <input type="text" disabled class="form-control" value="www.terascoding.id">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Persone In Charge (PIC)</label>
                                <input type="text" disabled class="form-control" value="Nama PIC">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Kontak PIC</label>
                                <input type="text" disabled class="form-control" value="Kontak PIC">
                            </div>
                        </div>
                    </div>

                    <!-- Lokasi Perusahaan -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">DATA LOKASI PERUSAHAAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#data-lokasi" aria-expanded="false" aria-controls="data-lokasi">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="data-lokasi">
                            <div class="mb-2">
                                <label class="form-label">Provinsi</label>
                                <input type="text" disabled class="form-control" value="Jawa Tengah">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Kabupaten</label>
                                <input type="text" disabled class="form-control" value="Jepara">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Kecamatan</label>
                                <input type="text" disabled class="form-control" value="Bangsri">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Desa / Kelurahan</label>
                                <input type="text" disabled class="form-control" value="Tengguli">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Dusun</label>
                                <input type="text" disabled class="form-control" value="kemlokomanis">
                            </div>
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">RW</label>
                                        <input type="text" disabled class="form-control" value="01">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">RT</label>
                                        <input type="text" disabled class="form-control" value="03">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nama Jalan</label>
                                <input type="text" disabled class="form-control" value="Jl. Guyangan-Bangsri KM.5">
                            </div>
                        </div>
                    </div>

                    <!-- Legalitas Data Perusahaan -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">LEGALITAS DATA PERUSAHAAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#legalitas-perusahaan" aria-expanded="false" aria-controls="legalitas-perusahaan">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="legalitas-perusahaan">
                            <div class="mb-2">
                                <label class="form-label">Status Badan Hukum</label>
                                <input type="text" class="form-control" disabled value="Data Badan Hukum">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Bentuk Perusahaan</label>
                                <input type="text" class="form-control" disabled value="Perseroan Terbatas (PT)">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">NPWP Perusahaan</label>
                                <input type="text" class="form-control" disabled value="NPWP Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">NIB Perusahaan</label>
                                <input type="text" class="form-control" disabled value="NIB Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">KBLI Perusahaan</label>
                                <input type="text" class="form-control" disabled value="KBLI Perusahaan">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Status Penanaman Modal Perusahaan</label>
                                <input type="text" class="form-control" disabled value="Status Penanaman Modal">
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Nilai Asset Perusahaan</label>
                                <input type="text" class="form-control" disabled value="Asset Perusahaan">
                            </div>
                        </div>
                    </div>

                    <!-- Profile Perusahaan -->
                    <div>
                        <div class="d-flex justify-content-between">
                            <h2 style="line-height: 10px;">PROFILE PERUSAHAAN</h2>
                            <span style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#profile-perusahaan" aria-expanded="false" aria-controls="profile-perusahaan">
                                <img src="{{ asset('assets/icon/csr/arrow_down.png') }}" alt="" class="icon">
                            </span>
                        </div>
                        <div class="collapse" id="profile-perusahaan">
                            Profile
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-shadow">
                <div class="card-body">
                    <!-- Search and Filter -->
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="card card-select">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <select name="" id="" class="form-select-dpa">
                                                <option value="" disabled selected>Pilih Tahun Program CSR</option>
                                                <option value="" class="option">2021</option>
                                                <option value="">2022</option>
                                            </select>
                                            <div>
                                                <button class="btn btn-orange__custome btn-search">CARI</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="d-flex">
                                    <a href="{{ route('csr-program-rka.index') }}" class="btn-block__custome">
                                        <span class="btn btn-green__custome btn-icon">
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
                                            <small class="text-grey">
                                                <p>FILTER <br> STATUS</p>
                                            </small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data CSR Perusahaan -->
                    <div class="mb-3">
                        <div class="mb-2">
                            <h2>DATA PELAKSANAAN PROGRAM CSR TAHUN 2003</h2>
                            <hr style="margin: 0; height: 1.3px;opacity: .5">
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="display" style="width: 100%;">
                                <thead>
                                    <th>Program</th>
                                    <th>Bidang</th>
                                    <th>Sub Bidang</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Kecamatan</th>
                                    <th>Desa / Kelurahan</th>
                                    <th>Anggaran (Rp)</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pemberdayaan Masyarakat</td>
                                        <td>Bidang Lingkungan</td>
                                        <td>Pengembangan Sarana Prasarana Umum</td>
                                        <td>Maleman Musholla Masjid Baitul Muttaqin</td>
                                        <td class="text-uppercase">Batealit</td>
                                        <td class="text-uppercase">Mindahan</td>
                                        <td>Rp. 300.000</td>
                                        <td>
                                            <span class="badge badge-success">Terlaksana</span>
                                        </td>
                                        <td>
                                            View
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
</div>

@endsection

@section('js')
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            searching: false,
            "lengthChange": false,
        });
    });
</script>
@endsection
