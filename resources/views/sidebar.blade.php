<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dasboard <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengajuan Kendaraan
    </div>

    @if (Auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/form-pengajuan">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tambah Pengajuan</span></a>
        </li>
    @endif


    {{-- HANYA USER YANG BERSANGKUTAN AJA --}}
    <li class="nav-item">
        <a class="nav-link" href="/approve-pengajuan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Approve</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Kendaraan
    </div>

    <li class="nav-item">
        <a class="nav-link" href="/kendaraan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Kendaraan</span></a>
    </li>

    {{-- HANYA USER YANG BERSANGKUTAN AJA --}}

    @if (Auth()->user()->role == 'admin')
        <li class="nav-item">
            <a class="nav-link" href="/tambah-kendaraan">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Tambah Kendaraan</span></a>
        </li>
    @endif


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
