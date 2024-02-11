<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
            <img src="{{ asset('template/src/assets/images/logos/dark-logo.svg') }}" width="180" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            {{-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/" aria-expanded="false">
                    <span>
                        <i class="ti ti-layout-dashboard"></i>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li> --}}
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Nilai Mahasiswa</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/nip" aria-expanded="false">
                    <span>
                        <i class="ti ti-article"></i>
                    </span>
                    <span class="hide-menu">NIP</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/lecture" aria-expanded="false">
                    <span>
                        <i class="ti ti-user"></i>
                    </span>
                    <span class="hide-menu">Dosen</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/faculty" aria-expanded="false">
                    <span>
                        <i class="ti ti-aperture"></i>
                    </span>
                    <span class="hide-menu">Fakultas</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/collegers" aria-expanded="false">
                    <span>
                        <i class="ti ti-users"></i>
                    </span>
                    <span class="hide-menu">Mahasiswa</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/lesson" aria-expanded="false">
                    <span>
                        <i class="ti ti-cards"></i>
                    </span>
                    <span class="hide-menu">Mata Kuliah</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/grade" aria-expanded="false">
                    <span>
                        <i class="ti ti-typography"></i>
                    </span>
                    <span class="hide-menu">Nilai</span>
                </a>
            </li>
            {{-- <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                    <span>
                        <i class="ti ti-login"></i>
                    </span>
                    <span class="hide-menu">Login</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="#" aria-expanded="false">
                    <span>
                        <i class="ti ti-user-plus"></i>
                    </span>
                    <span class="hide-menu">Register</span>
                </a>
            </li> --}}
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>
