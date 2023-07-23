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
                    <span class="fw-bolder text-grey sub_title--first">DETAIL MASTER SEKTOR KBLI</span>
                    <span class="sub_title--second">Detail Data Master Sektor KBLI</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('master-sector-kbli.index') }}" class="btn-block__custome">
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
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>INFORMASI SEKTOR KBLI</h2>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">ID Master Sektor KBLI <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" disabled value="12345">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">Sektor KBLI <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" disabled value="PERTANIAN, KEHUTANAN DAN PERIKANAN">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>DESKRIPSI SEKTOR KBLI</h2>
                        <div class="mb-3">
                            <label class="form-label__custome">Deskripsi</label>
                            <textarea class="form-control form-control__text-area" disabled style="height: 150px;">Kategori ini mencakup semua kegiatan ekonomi/lapangan usaha, yang meliputi pertanian tanaman pangan, perkebunan, hortikultura, peternakan, pemanenan hasil hutan serta penangkapan dan budidaya ikan/biota air. Kategori ini juga mencakup jasa penunjang masing-masing kegiatan ekonomi tersebut</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>KETERANGAN SEKTOR KBLI</h2>
                        <div class="mb-3">
                            <label class="form-label__custome">Keterangan</label>
                            <textarea class="form-control form-control__text-area" disabled style="height: 150px;">KBLI 2017</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Content end-->
@endsection