$(document).ready(function() {
    $('.select-subdistrict').select2({
        placeholder: "Pilih Kecamatan",
        allowClear: true
    });

    $('.select-village').select2({
        placeholder: "Pilih Desa / Kecamatan",
        allowClear: true
    });

    $('.select-sub-village').select2({
        placeholder: "Pilih Dusun",
        allowClear: true
    });

    $('.select-rw').select2({
        placeholder: "Pilih RW",
        allowClear: true
    });

    $('.select-rt').select2({
        placeholder: "Pilih RT",
        allowClear: true
    });

    // Pilih Lingkar Yang Terdampak
    $('.select-lingkar-1').select2({
        placeholder: "Pilih Desa",
        allowClear: true
    });
    $('.select-lingkar-2').select2({
        placeholder: "Pilih Desa",
        allowClear: true
    });
});
