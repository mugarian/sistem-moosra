<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
        <div class="sidebar-brand-icon">
            <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SIMOOSRA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
        <a class="nav-link" href="/home">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ Request::is('kriteria*') ? 'active' : '' }}">
        <a class="nav-link" href="/kriteria">
            <i class="fa-solid fa-key"></i>
            <span>Kriteria</span></a>
        </li>
    <li class="nav-item {{ Request::is('subkriteria*') ? 'active' : '' }}">
        <a class="nav-link" href="/subkriteria">
            <i class="fa-solid fa-tag"></i>
            <span>Sub Kriteria</span></a>
    </li>
    <li class="nav-item {{ Request::is('alternatif*') ? 'active' : '' }}">
        <a class="nav-link" href="/alternatif">
            <i class="fa-solid fa-person-half-dress"></i>
            <span>Alternatif</span></a>
    </li>
    <li class="nav-item {{ Request::is('penilaian*') ? 'active' : '' }}">
        <a class="nav-link" href="/penilaian">
            <i class="fa-solid fa-award"></i>
            <span>Penilaian</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Hasil
    </div>

</ul>
