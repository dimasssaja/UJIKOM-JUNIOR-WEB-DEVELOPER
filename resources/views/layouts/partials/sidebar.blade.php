<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">

    {{-- profile --}}
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('dashboard') }}">
            <img src="./assets/img/icon1.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">DSiGawai</span>
        </a>
    </div>


    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            {{-- menu dashboard --}}
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('dashboard') }}">

                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>

                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            {{-- menu pegawai --}}
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('pegawai.index') }}">

                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users"></i>
                    </div>

                    <span class="nav-link-text ms-1">Data Pegawai</span>
                </a>
            </li>
            {{-- menu User --}}
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('pegawai.userpgw') }}">

                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">person</i>
                    </div>

                    <span class="nav-link-text ms-1">Data User</span>
                </a>
            </li>

        </ul>
    </div>

    {{-- menu logout --}}
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a href="{{ route('logout') }}" class="btn bg-gradient-primary w-100"
                href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree"
                type="button">Logout</a>
        </div>

    </div>

</aside>
