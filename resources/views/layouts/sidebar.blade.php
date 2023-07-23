<div class="sidebar" id="getSidebar">
    <div class="side-top p-3">
        <div class="close d-flex justify-content-end" id="getClose">
            <svg xmlns="http://www.w3.org/2000/svg" style="width: 25px; height:25px;" class="icon" width="24"
                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M18 6l-12 12"></path>
                <path d="M6 6l12 12"></path>
            </svg>
        </div>
        <!-- Logo -->
        <a href="" class="logo-box">
            <div class="logo-brand d-flex justify-content-center">
                <img src="{{ asset('assets/static/logo/logo-white.png') }}" alt="" class="">
            </div>
        </a>
        <!-- End Logo -->
    </div>

    <!-- Menu -->
    <div class="sidebar-group">
        <ul class="sidebar-list">
            <li class="@if (Request::routeIs('dashboard')) active @endif">
                <a href="{{ route('dashboard') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img class="me-3" src="{{ asset('assets/icon/dashboard-icon.png') }}"
                            style="width: 28px; height: 26px;">
                        <span class="name">Dashboard</span>
                    </div>
                </a>
            </li>
            {{-- <li class="@if (Request::routeIs('employee*')) active @endif">
                <a href="" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/icon/website-icon.png')}}" alt="" class="icon-sidebar me-3">
                        <span class="name">Website Admin</span>
                    </div>
                </a>
            </li>
            <li class="@if (Request::is('user*')) active @endif">
                <a href="{{ route('admin-pusat.index') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/icon/user.png')}}" alt="" class="icon-sidebar me-3">
                        <span class="name">Pengguna</span>
                    </div>
                </a>
            </li>
            <li class="@if (Request::is('master-data*')) active @endif">
                <a href="{{ route('master-opd.index') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img class="me-3" src="{{asset('assets/icon/masterdata-icon.png')}}" alt="" style="width: 28px; height: 30px;">
                        <span class="name">Master Data</span>
                    </div>
                </a>
            </li> --}}
            <li class="@if (Request::is('company*')) active @endif">
                <a href="{{ route('company.create') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img class="me-3" src="{{ asset('assets/icon/perusahaan-icon.png') }}" alt=""
                            style="width: 28px;">
                        <span class="name">Perusahaan</span>
                    </div>
                </a>
            </li>
            {{-- <li class="@if (Request::is('opd*')) active @endif">
                <a href="{{ route('opd.create') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{asset('assets/icon/opd-icon.png')}}" alt="" class="icon-sidebar me-3">
                        <span class="name">OPD</span>
                    </div>
                </a>
            </li> --}}
            <li class="@if (Request::is('csr*')) active @endif">
                <a href="{{ route('csr-usulan-program.index') }}" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/icon/csr-icon.png') }}" alt="" class="icon-sidebar me-3">
                        <span class="name">CSR</span>
                    </div>
                </a>
            </li>
            <li class="@if (Request::is('dashboard/pendapatan_lain*')) active @endif">
                <a href="" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/icon/penilaian-icon.png') }}" alt="" style="width: 28px;"
                            class="me-3">
                        <span class="name">Penilaian</span>
                    </div>
                </a>
            </li>
            <li class="@if (Request::is('dashboard/operasional*')) active @endif">
                <a href="" class="title">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/icon/laporan-icon.png') }}" alt="" class="icon-sidebar me-3">
                        <span class="name">Laporan</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Menu -->
</div>
