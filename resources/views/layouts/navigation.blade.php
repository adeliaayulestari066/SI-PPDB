<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TK Al-Muchlis<sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span></a>
    </li>

    {{-- <!-- Nav Item - Tables -->
    <li class="nav-item @if(request()->routeIs('manajeman_data_siswa.index')) active @endif">
        <a class="nav-link" href="{{ route('manajeman_data_siswa.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Manajeman Data Pendaftar') }}</span></a>
    </li> --}}

    {{-- <li class="nav-item @if(request()->routeIs('manajeman_data_siswa.index')) active @endif">
        <a class="nav-link" href="{{ route('manajeman_data_siswa.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Manajeman Data Siswa') }}</span></a>
    </li>

    <li class="nav-item @if(request()->routeIs('kategori.index')) active @endif">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Manajeman Data Kategori Guru') }}</span></a>
    </li>

    <li class="nav-item @if(request()->routeIs('manajeman_portofolio.index')) active @endif">
        <a class="nav-link" href="{{ route('manajeman_portofolio.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Manajeman Pembayaran') }}</span></a>
    </li>

    <li class="nav-item @if(request()->routeIs('ulasan.index')) active @endif">
        <a class="nav-link" href="{{ route('ulasan.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>{{ __('Manajemen Galeri') }}</span></a>
    </li>


    <li class="nav-item @if(request()->routeIs('about')) active @endif">
        {{-- <a class="nav-link" href="{{ route('about') }}"> --}}
            <i class="fas fa-fw fa-eye"></i>
            <span>{{ __('About') }}</span></a>
    </li> --}}

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline pt-4">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
