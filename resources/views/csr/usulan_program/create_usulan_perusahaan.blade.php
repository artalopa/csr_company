@extends('layouts.general')

@section('title', 'Tambah Perusahaan')

@section('css')
    <link href="{{ asset('assets/dist/libs/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/libs/select2/css/select2custome.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- Title -->
    <div class="col-md-12 mb-3">
        <h1 class="title-content__custome">CORPORATE SOCIAL RESPONSIBILITY (CSR)</h1>
    </div>
    <!-- Title end -->

    <!-- Bar menu -->
    @include('csr.bar_menu')
    <!-- Bar menu end -->

    <!-- Content -->
    <div class="col-md-12 mb-3">
        <div class="card card-shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="sub_title">
                        <span class="fw-bolder text-grey sub_title--first">TAMBAH USULAN PERUSAHAAN</span>
                        <span class="sub_title--second">Tambah Usulan Program CSR Dari Perusahaan</span>
                    </div>
                    <div>
                        <a href="{{ route('csr-usulan-program.index') }}" class="btn-block__custome">
                            <span class="btn btn-red-dark__custome btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-circle-chevron-left" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
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
                <form action="{{ route('csr-usulan-program.post') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <h2>USULAN KEGIATAN CSR PERUSAHAAN</h2>
                                <div class="mb-2">
                                    <label class="form-label__custome">ID Usulan Program CSR <span>*</span></label>
                                    <input type="text" id="code" base-code="PRCSR"
                                        class="form-control form-control__custome" placeholder="( Otomatis )" disabled>
                                    <input type="text" id="getCode" hidden name="code">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Nama Perusahaan <span>*</span></label>
                                    <select name="user_code" id="user_code" class="form-select form-select__custome">
                                        <option value="" disabled selected>Pilih nama perusahaan
                                        </option>
                                        <option value="USR001">PT. Lorem</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Status Program <span>*</span></label>
                                    <select name="" id="" class="form-select form-select__custome" disabled>
                                        <option value="" disabled>Program Reguler / Program Prioritas
                                        </option>
                                        <option value="" selected>Reguler</option>
                                        <option value="">Prioritas</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Sektor <span>*</span></label>
                                    <select name="kbli_sector_code" id="" class="form-select form-select__custome">
                                        <option value="" disabled selected>Pilih Sektor CSR ( Untuk Program Reguler )
                                        </option>
                                        <option value="KBLI001">Sektor 1</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Sub Sektor <span>*</span></label>
                                    <select name="kbli_sub_sector_code" id=""
                                        class="form-select form-select__custome">
                                        <option value="" disabled selected>Pilih Sub Sektor</option>
                                        <option value="SUBSK001">Sub Sektor 1</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Pilih Program<span>*</span></label>
                                    <select name="master_program_code" id=""
                                        class="form-select form-select__custome">
                                        <option value="" disabled selected>Pilih Program</option>
                                        <option value="PR001">Program 1</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Nama Kegiatan <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="Tulis Nama Kegiatan CSR" name="name">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Status Kegiatan<span>*</span></label>
                                    <select name="status_kegiatan" id="" class="form-select form-select__custome">
                                        <option value="" disabled selected>Berkelanjutan / Tidak Berkelanjutan
                                        </option>
                                        <option value="berlanjut">Kerbelanjutan</option>
                                        <option value="tidak">Tidak Keberlanjutan</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Deskripsi Kegiatan <span>*</span></label>
                                    <textarea class="form-control form-control__custome" placeholder="Tulis Deskripsi Kegiatan" style="height: 80px;"
                                        name="description"></textarea>
                                </div>
                            </div>
                            <div>
                                <h2>SASARAN KEGIATAN CSR PERUSAHAAN</h2>
                                <div class="mb-2">
                                    <label class="form-label__custome">Sasaran Kegiatan <span>*</span></label>
                                    <select name="sasaran" id="" class="form-select form-select__custome">
                                        <option value="" disabled selected>Individu / Kelompok Masyarakat / Lembaga
                                        </option>
                                        <option value="individu">Individu</option>
                                        <option value="kelompok_masyarakat">kelompok Masyarakat</option>
                                        <option value="lembaga">Lembaga</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Detail Sasaran <span>*</span></label>
                                    <textarea class="form-control form-control__custome" placeholder="Tulis Detail Sasaran" style="height: 80px;"
                                        name="detail_sasaran"></textarea>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Target Pemanfaat <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="Tulis Target Pemanfaat" name="target_pemanfaat">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Detail Target Pemanfaat <span>*</span></label>
                                    <textarea class="form-control form-control__custome" placeholder="Tulis Detail Target Pemanfaat"
                                        style="height: 80px;" name="detail_target_pemanfaat"></textarea>
                                </div>
                            </div>
                            <div>
                                <h2>WAKTU PELAKSANAAN KEGIATAN</h2>
                                <div class="mb-2">
                                    <label class="form-label__custome">Rencana Pelaksanaan <span>*</span></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select name="" id=""
                                                class="form-select form-select__custome">
                                                <option value="" disabled selected>Pilih Tahun</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="" id=""
                                                class="form-select form-select__custome">
                                                <option value="" disabled selected>Pilih Bulan</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="" id=""
                                                class="form-select form-select__custome">
                                                <option value="" disabled selected>Pilih Tanggal</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Penanggung Jawab Kegiatan <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="Tulis Nama Penanggung Jawab Kegiatan" name="pj">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Kontak Penanggung Jawab Kegiatan
                                        <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="Tulis Nama Kontak Penanggung Jawab Kegiatan" name="pj_phone">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <h2>LOKASI KEGIATAN CSR PERUSAHAAN</h2>
                                <div class="mb-2">
                                    <label class="form-label__custome">Provinsi <span>*</span></label>
                                    <select name="" id="" class="form-select form-select__custome">
                                        <option value="">Jawa Tengah</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Kabupaten <span>*</span></label>
                                    <select name="" id="" class="form-select form-select__custome">
                                        <option value="">Jepara</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Kecamatan <span>*</span></label>
                                    <select class="select-subdistrict form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">Jepara</option>
                                        <option value="AL">Tahunan</option>
                                        <option value="AL">Bangsri</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Desa / Kelurahan <span>*</span></label>
                                    <select class="select-village form-select2__custome" name="state">
                                        <option value=""></option>
                                        <option value="AL">Bangsri</option>
                                        <option value="AL">Tengguli</option>
                                        <option value="AL">Jambu Timur</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Detail Lokasi Kegiatan <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="Tulis Detail Lokasi Kegiatan">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label__custome">Deskripsi Lokasi Kegiatan</label>
                                    <textarea name="" class="form-control form-control__custome" style="height: 120px;"
                                        placeholder="Tulis Deskripsi Lokasi Kegiatan"></textarea>
                                </div>
                            </div>
                            <div>
                                <h2 style="line-height: 2px;">RENCANA ANGGARAN BIAYA</h2>
                                <div class="mb-2">
                                    <label class="form-label__custome">Range Nominal RAB <span>*</span></label>
                                    <select name="master_nominal_code" id=""
                                        class="form-select form-select__custome">
                                        <option value="" disabled selected>Pilih Nominal RAB</option>
                                        <option value="NO001">
                                            < Rp. 5.000.000 </option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label__custome">Nomial RAB <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome" placeholder="Rp. "
                                        data-type="currency" name="nominal_rab">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label__custome">Buat RAB <span>*</span></label>
                                    <div class="row g-1 mb-1">
                                        <div class="col-md-4 mb-1">
                                            <input type="text" class="form-control form-control__custome" disabled
                                                value="Item Kegiatan">
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <input type="text" class="form-control form-control__custome" disabled
                                                value="Satuan">
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            <input type="text" class="form-control form-control__custome" disabled
                                                value="Rp. ">
                                        </div>
                                        <div class="col-md-2 mb-1">
                                            <a href="javascript:void(0)" class="btn btn-add__rab w-100 h-100"
                                                id="add-rab">
                                                <img src="{{ asset('assets/icon/csr/icon_add_white.png') }}"
                                                    alt="" class="icon">
                                                Tambah
                                            </a>
                                        </div>
                                    </div>
                                    <div id="form-add-rab"></div>
                                    <div class="row g-1">
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control form-control__custome form-control__green" disabled
                                                value="Total RAB">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text"
                                                class="form-control form-control__custome form-control__green"
                                                id="total-rab" data-type="currency" disabled value="Rp. ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h2 style="line-height: 2px;">PERKIRAAN SKOR USULAN PROGRAM</h2>
                                <div class="mb-3">
                                    <label class="form-label__custome">Perkiraan Skor (Maksimal 100) <span>*</span></label>
                                    <input type="text" class="form-control form-control__custome"
                                        placeholder="(Otomatis)">
                                </div>
                                <h2 style="line-height: 2px">LAMPIRAN FILE KEGIATAN</h2>
                                <div class="mb-4">
                                    <label class="form-label__custome">lampiran File Kegiatan</label>
                                    <div class="row g-1 mb-2">
                                        <div class="col-md-10">
                                            <input type="text" class="form-control form-control__custome" disabled
                                                placeholder="Pilih File (doc, pdf)">
                                            <input type="file" id="file-input" hidden>
                                        </div>
                                        <div class="col-md-2">
                                            <a href="javascript:void(0)" class="btn btn-add__upload w-100 h-100"
                                                id="upload-multiple-file">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="icon icon-tabler icon-tabler-cloud-upload" width="24"
                                                    height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M7 18a4.6 4.4 0 0 1 0 -9a5 4.5 0 0 1 11 2h1a3.5 3.5 0 0 1 0 7h-1">
                                                    </path>
                                                    <path d="M9 15l3 -3l3 3"></path>
                                                    <path d="M12 12l0 9"></path>
                                                </svg>
                                                Upload
                                            </a>
                                        </div>
                                    </div>
                                    <div id="show-file">

                                    </div>

                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-green__custome"
                                        style="font-size: 1rem">SIMPAN</button>
                                </div>
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
    <script src="{{ asset('assets/dist/js/currency.js') }}"></script>
    <script src="{{ asset('assets/dist/js/autocode.js') }}"></script>

    <script>
        var add_rab = document.getElementById('add-rab');
        add_rab.addEventListener("click", function() {
            html = `<div class='row g-1 mb-1' id='rab-child'>\
                        <div class='col-md-4'>\
                            <input type='text' class='form-control form-control__custome' >\
                        </div>\
                        <div class='col-md-2'>\
                            <input type='text' class='form-control form-control__custome' >\
                        </div>\
                        <div class='col-md-4'>\
                            <input type='text' name='nominal-rab' id='nominal-rab' class='form-control form-control__custome list-rab' data-type='currency' placeholder='Rp. ' >\
                        </div>\
                        <div class='col-md-2'>\
                            <a href='javascript:void(0)' class='btn btn-danger__custome w-100 h-100' id='delete-rab'>\
                                <img src='http://127.0.0.1:8000/assets/icon/csr/cancel_white.png' alt='' class='icon'>\
                                Cancel\
                            </a>\
                        </div>\
                    </div>`;

            $("#form-add-rab").append(html);

            // currency
            // Jquery Dependency

            $("input[data-type='currency']").on({
                keyup: function() {
                    formatCurrency($(this));
                },
                blur: function() {
                    formatCurrency($(this), "blur");
                },
            });

            function formatNumber(n) {
                // format number 1000000 to 1,234,567
                return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            function formatCurrency(input, blur) {
                // appends $ to value, validates decimal side
                // and puts cursor back in right position.

                // get input value
                var input_val = input.val();

                // don't validate empty input
                if (input_val === "") {
                    return;
                }

                // original length
                var original_len = input_val.length;

                // initial caret position
                var caret_pos = input.prop("selectionStart");

                // final formatting
                input_val = formatNumber(input_val);
                input_val = "Rp. " + input_val;

                // send updated string to input
                input.val(input_val);

                // total RAB
                var list_rab = document.getElementsByClassName('list-rab');
                var arr = [...list_rab].map(input => parseInt(input.value.replace(/[Rp. ]+/g, "")));

                // define a reusable sum function
                const calculateSum = (arr) => {
                    return arr.reduce((total, current) => {
                        return total + current;
                    }, 0);
                }
                // total rab
                var total_rab = calculateSum(arr);
                $('#total-rab').val('Rp. ' + total_rab.toLocaleString("de-DE"));

                // put caret back in the right position
                var updated_len = input_val.length;
                caret_pos = updated_len - original_len + caret_pos;
                input[0].setSelectionRange(caret_pos, caret_pos);
            }

        });

        $("body").on("click", "#delete-rab", function() {
            $(this).parents("#rab-child").remove();

            // total RAB
            var list_rab = document.getElementsByClassName('list-rab');
            var arr = [...list_rab].map(input => parseInt(input.value.replace(/[Rp. ]+/g, "")));

            // define a reusable sum function
            const calculateSum = (arr) => {
                return arr.reduce((total, current) => {
                    return total + current;
                }, 0);
            }
            // total rab
            var total_rab = calculateSum(arr);
            $('#total-rab').val('Rp. ' + total_rab.toLocaleString("de-DE"));
        })
    </script>

    <script>
        var btnUpload = document.getElementById("upload-multiple-file");
        var fileInput = document.getElementById("file-input");
        btnUpload.addEventListener("click", function() {
            fileInput.click();
        });

        fileInput.addEventListener("change", function(e) {
            show =
                `<div class='row g-1 mb-1' id='upload-child'>\
                    <div class='col-md-10'>\
                        <input type='text' name=''class='form-control form-control__custome' disabled placeholder='" +
e.target.value + "'>\
                    </div>\
                    <div class='col-md-2'>\
                        <a href='javascript:void(0)' class='btn btn-danger__custome w-100 h-100' id='delete-file'>\
                            <img src='http://127.0.0.1:8000/assets/icon/csr/cancel_white.png' alt='' class='icon'>\
                            Cancel\
                        </a>\
                    </div>\
                </div>`;
            $("#show-file").append(show);
            console.log(this.files[0]);
        });


        $("body").on("click", "#delete-file", function() {
            $(this).parents("#upload-child").remove();
        })
    </script>
@endsection
