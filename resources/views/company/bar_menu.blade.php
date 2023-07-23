<div class="col-md-12 mb-3">
    <div class="nav-menu">
        <ul class="nav-menu-bar">
            <li class="nav-menu-item">
                <a href="{{ route('company.create') }}" class="nav-menu-link @if(Request::routeIs('company.create')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/company/create_company.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span>Tambah Perusahaan</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('company.index') }}" class="nav-menu-link @if(Request::routeIs('company.index')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/company/company.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span>Data Perusahaan</span>
                </a>
            </li>
        </ul>
        <div class="nav-menu-home text-center">
            <a href="">
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
