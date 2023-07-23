<div class="col-md-12 mb-3">
    <div class="nav-menu">
        <ul class="nav-menu-bar">
            <li class="nav-menu-item">
                <a href="{{ route('master-opd.index') }}" class="nav-menu-link @if(Request::is('master-data/master-opd*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/master/master_opd.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Master OPD</span>
                </a>
            </li>
            <li class="nav-menu-item dropdown">
                <a href="javascript:void(0)" class="nav-menu-link @if(Request::is('master-data/program-csr*')) active @endif" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span>
                        <img src="{{ asset('assets/icon/master/master_csr.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Program CSR</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#202020cc" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 9l6 6l6 -6"></path>
                        </svg>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu__bg-none" data-bs-popper="static">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/program-csr/master-bidang*')) active @endif" href="{{ route('master-bidang.index') }}">
                                <span>Master Bidang</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/program-csr/master-sub-bidang*')) active @endif" href="{{ route('master-sub-bidang.index') }}">
                                <span>Master Sub Bidang</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/program-csr/master-program*')) active @endif" href="{{ route('master-program.index') }}">
                                <span>Master Program</span>
                            </a>
                        </div>
                      </div>
                </div>
            </li>
            <li class="nav-menu-item dropdown">
                <a href="javascript:void(0)" class="nav-menu-link @if(Request::is('master-data/prioritas-pembangunan-daerah*')) active @endif" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span>
                        <img src="{{ asset('assets/icon/master/master_prioritas_perusahaan.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Prioritas Pembangunan</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#202020cc" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 9l6 6l6 -6"></path>
                        </svg>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu__bg-none" data-bs-popper="static">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/prioritas-pembangunan-daerah/prioritas-pembangunan*')) active @endif" href="{{ route('master-prioritas-pembangunan.index') }}">
                                <span>Prioritas Pembangunan</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/prioritas-pembangunan-daerah/arah-kebijakan*')) active @endif" href="{{ route('master-arah-kebijakan.index') }}">
                                <span>Arah Kebijakan</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/prioritas-pembangunan-daerah/program-pmdn*')) active @endif" href="{{ route('master-program-pmdn.index') }}">
                                <span>Program PMDN 90</span>
                            </a>
                        </div>
                      </div>
                </div>
            </li>
            <li class="nav-menu-item dropdown">
                <a href="javascript:void(0)" class="nav-menu-link @if(Request::is('master-data/penilaian*')) active @endif" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span>
                        <img src="{{ asset('assets/icon/master/master_penilaian.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Penilaian</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#202020cc" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 9l6 6l6 -6"></path>
                        </svg>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu__bg-none" data-bs-popper="static">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/penilaian/nominal*')) active @endif" href="{{ route('penilaian-nominal.index') }}">
                                <span>Nominal</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/penilaian/dampak*')) active @endif" href="{{ route('penilaian-dampak.index') }}">
                                <span>Dampak</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/penilaian/keterkaitan*')) active @endif" href="{{ route('penilaian-keterkaitan.index') }}">
                                <span>Keterkaitan</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/penilaian/keberlanjutan*')) active @endif" href="{{ route('penilaian-keberlanjutan.index') }}">
                                <span>Keberlanjutan</span>
                            </a>
                        </div>
                      </div>
                </div>
            </li>
            <li class="nav-menu-item dropdown">
                <a href="" class="nav-menu-link @if(Request::is('master-data/company*')) active @endif" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span>
                        <img src="{{ asset('assets/icon/master/master_perusahaan.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Perusahaan</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="#202020cc" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M6 9l6 6l6 -6"></path>
                        </svg>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu__bg-none" data-bs-popper="static">
                    <div class="dropdown-menu-columns">
                        <div class="dropdown-menu-column">
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/company/bentuk-perusahaan*')) active @endif" href="{{ route('master-bentuk-perusahaan.index') }}">
                                <span>Bentuk Perusahaan</span>
                            </a>
                            <a class="dropdown-item dropdown-item__custome @if(Request::is('master-data/company/kbli*')) active @endif" href="{{ route('master-kbli.index') }}">
                                <span>KBLI</span>
                            </a>
                        </div>
                      </div>
                </div>
            </li>
        </ul>
        <div class="nav-menu-home text-center">
            <a href="{{ route('dashboard') }}">
                <span class="nav-menu-home-icon">
                    <i class="fa-solid fa-house"></i>
                </span>
                <span>
                    <small>Home</small>
                </span>
            </a>
        </div>
    </div>
</div>
