@extends('layouts.general')

@section('title', 'SIMONCER')

@section('css')
<!-- Maps CSS -->
<link rel="stylesheet" href="{{ asset('assets/dist/libs/leaflet/leaflet.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dist/js/maps/style.css') }}">

@endsection

@section('content')
<!-- Title -->
{{-- <div class="col-md-12 d-flex justify-content-between align-items-center mb-3">
    <div class="">
        <h1 class="title-content__custome">PETA LOKASI PELAKSANAAN CSR</h1>
    </div>
    <div>
        <a href="#" class="btn btn-green__custome">
            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9 6l11 0"></path>
                <path d="M9 12l11 0"></path>
                <path d="M9 18l11 0"></path>
                <path d="M5 6l0 .01"></path>
                <path d="M5 12l0 .01"></path>
                <path d="M5 18l0 .01"></path>
            </svg>
            Kategori CSR
        </a>
    </div>
</div> --}}
<!-- Title end -->

<!-- Maps -->
<div class="col-md-12 mb-3">
    <div class="card card-shadow">
        <div class="card-body">
            <div id="map">
                <div class="map-title">
                    <h1>PETA LOKASI PELAKSANAAN CSR</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Maps end -->

<!-- Chart left -->
<div class="col-md-5 mb-3">
    <div class="row g-0 row-deck">
        <div class="col-md-6 mb-3">
            <div class="card card-shadow me-3">
                <div class="card-body">
                    <div id="prioritas" style="height:180px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card card-shadow">
                <div class="card-body">
                    <div id="penunjang" style="height:180px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card card-shadow">
                <div class="card-body">
                    <div id="sector" style="height: 377px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chart left end -->

<!-- Chart right -->
<div class="col-md-7 mb-3">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="card card-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <h3 class="card-title fw-bolder">GRAFIK PROGRAM</h3>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div id="program_trafic"></div>
                        </div>
                        <div class="col-md-auto">
                          <div class="divide-y divide-y-fill divide-y__custome">
                            <div class="px-3">
                                <div class="text-muted">
                                  <span class="status-dot" style="background-color: #b2d037;"></span> Terlaksana
                                </div>
                                <div class="h3">6,458</div>
                            </div>
                            <div class="px-3">
                              <div class="text-muted">
                                <span class="status-dot" style="background-color: #00adad;"></span> Belum Terlaksana
                              </div>
                              <div class="h3">11,425</div>
                            </div>
                            <div class="px-3">
                              <div class="text-muted">
                                <span class="status-dot" style="background-color: #4e4c8c"></span> Melebihi Jadwal
                              </div>
                              <div class="h3">6,458</div>
                            </div>
                            <div class="px-3">
                              <div class="text-muted">
                                <span class="status-dot" style="background-color: #f2591f"></span> Tidak Terlaksana
                              </div>
                              <div class="h3">3,985</div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="row row-deck">
                <div class="col-md-6 mb-3">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div id="program_unggulan"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card card-shadow">
                        <div class="card-body">
                            <div id="program_reguler"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chart right end-->
@endsection

@section('js')
<!-- Maps script -->
<script src="{{ asset('assets/dist/libs/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('assets/dist/js/maps/maps.js') }}"></script>

<!-- Speedometer chart script -->
<script src="{{ asset('assets/dist/js/echarts/js/echarts-all.js') }}"></script>
<script src="{{ asset('assets/dist/js/echarts/program_prioritas.js') }}"></script>
<script src="{{ asset('assets/dist/js/echarts/program_penunjang.js') }}"></script>

<!-- Apexcharts js -->
<script src="{{ asset('assets/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/dist/js/apexcharts/sector.js') }}"></script>
<script src="{{ asset('assets/dist/js/apexcharts/program_chart.js') }}"></script>

<!-- Donut chart js -->
<script src="{{ asset('assets/dist/js/donutchart/unggulan.js') }}"></script>
<script src="{{ asset('assets/dist/js/donutchart/regular.js') }}"></script>
@endsection
