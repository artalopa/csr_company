<div class="col-md-12 mb-3">
    <div class="nav-menu">
        <ul class="nav-menu-bar">
            <li class="nav-menu-item">
                <a href="{{ route('csr-usulan-program.index') }}" class="nav-menu-link @if(Request::is('csr/usulan-program*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/csr/usulan_program.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Usulan Program</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('csr-program-rka.index') }}" class="nav-menu-link @if(Request::is('csr/program-rka*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/csr/program.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Program CSR / RKA</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('dpa.index') }}" class="nav-menu-link @if(Request::is('csr/dpa*')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/csr/program.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Pelaksanaan Program / DPA</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="" class="nav-menu-link">
                    <span>
                        <img src="{{ asset('assets/icon/csr/pelaporan_pelaksanaan.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span class="nav-menu-title">Pelaporan Pelaksanaan</span>
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
