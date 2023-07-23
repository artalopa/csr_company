<div class="col-md-12 mb-3">
    <div class="nav-menu">
        <ul class="nav-menu-bar">
            <li class="nav-menu-item">
                <a href="{{ route('opd.create') }}" class="nav-menu-link @if(Request::routeIs('opd.create')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/opd/add-opd.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span>Tambah OPD</span>
                </a>
            </li>
            <li class="nav-menu-item">
                <a href="{{ route('opd.index') }}" class="nav-menu-link @if(Request::routeIs('opd.index')) active @endif">
                    <span>
                        <img src="{{ asset('assets/icon/opd/data-opd.png') }}" alt="" class="nav-menu-icon">
                    </span>
                    <span>Data OPD</span>
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
