<div class="col-md-12 mb-3">
    <div class="nav-menu">
        <ul class="nav-menu-bar">
            <li class="nav-menu-item">
                <a href="{{ route('admin-pusat.index') }}" class="nav-menu-link @if(Request::is('user/admin-pusat*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/pengguna/admin_pusat.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Admin Pusat</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('admin-perekonomian.index') }}" class="nav-menu-link @if(Request::is('user/admin-perekonomian*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/pengguna/bag_perekonomian.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Bag Perekonomian</span>
                </a>
            </li>
            <li class="nav-menu-item dropdown">
                <a href="" class="nav-menu-link @if(Request::is('user/bapeda-opd*')) active @endif" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span>
                        <img src="{{ asset('assets/icon/pengguna/bapeda_opd.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">BAPEDA & OPD</span>
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
                          <a class="dropdown-item dropdown-item__custome @if(Request::is('user/bapeda-opd/bapeda*')) active @endif" href="{{ route('admin-bapeda.index') }}">
                            <span>BAPEDA</span>
                          </a>
                          <a class="dropdown-item dropdown-item__custome @if(Request::is('user/bapeda-opd/opd*')) active @endif" href="{{ route('admin-opd.index') }}">
                            <span>OPD</span>
                          </a>
                        </div>
                      </div>
                </div>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('admin-pengawas.index') }}" class="nav-menu-link @if(Request::is('user/admin-pengawas*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/pengguna/pengawas.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Pengawas</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('admin-company.index') }}" class="nav-menu-link @if(Request::is('user/admin-company*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/pengguna/perusahaan.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Perusahaan</span>
                </a>
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
