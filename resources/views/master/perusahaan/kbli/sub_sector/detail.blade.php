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
                    <span class="fw-bolder text-grey sub_title--first">DETAIL MASTER SUB SEKTOR KBLI</span>
                    <span class="sub_title--second">Detail Data Master Sub Sektor KBLI</span>
                </div>
                <div class="d-flex">
                    <a href="{{ route('master-sub-sector-kbli.index') }}" class="btn-block__custome">
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
                        <h2>INFORMASI SUB SEKTOR KBLI</h2>
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">ID Master Sub Sektor KBLI <span>*</span></label>
                                <input type="text" class="form-control form-control__profile" disabled value="12345">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="form-label__custome">Judul Sub Sektor KBLI <span>*</span></label>
                                <textarea class="form-control form-control__text-area" style="height: 120px" disabled>PERTANIAN TANAMAN, PETERNAKAN, PERBURUAN DAN KEGIATAN YBDI</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>SEKTOR KBLI</h2>
                        <div>
                            <label class="form-label__custome">Sektor KBLI</label>
                            <textarea class="form-control form-control__text-area" disabled style="height: 170px;">PERTANIAN, KEHUTANAN DAN PERIKANAN</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card card-shadow">
                    <div class="card-body">
                        <h2>KETERANGAN SUB SEKTOR KBLI</h2>
                        <div>
                            <label class="form-label__custome">Keterangan</label>
                            <textarea class="form-control form-control__text-area" disabled style="height: 170px;">Golongan pokok ini mencakup pertanian tanaman pangan, perkebunan dan hortikultura; usaha pemeliharaan hewan ternak dan unggas; perburuan dan penangkapan hewan denganperangkap serta kegiatan penunjang ybdi yang ditujukan untuk dijual. Termasuk budidaya tanaman dan hewan ternak secara organik dan genetik. Kegiatan pertanian tidak mencakup kegiatan pengolahan dari komoditas pertanian, termasuk dalam Kategori C (Industri Pengolahan). Kegiatan konstruksi lahan seperti pembuatan petak-petak sawah, irigasi saluran pembuangan air, serta pembersihan dan perbaikan lahan untuk pertanian tidak termasuk disini, tetapi tercakup pada kategori konstruksi (F).</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Content end-->
@endsection
