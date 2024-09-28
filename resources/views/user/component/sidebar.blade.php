<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-1"><sup></sup></div>
    <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <div class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="vertical-align: middle;
                width: 60px;
                height: 60px;
                border-radius: 50%" class="rounded-circle"
                    src="{{asset('img/logo-poliwangi.png')}}">
            </div>
        
        {{-- <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{('admin/profile')}}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
            </a>
            <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div> --}}
        <div>
        <span><h2 style="font-size:20px; text-transform: capitalize;">Rena{{--$namauser->name--}} | Pengguna {{--$roleuser--}}</h2>
            <h3 style="font-size:12px; text-transform: lowercase;">renaamaliaafifah@gmail.com</h3>
        </span></a>
        

        </div>
    </li>
</a>
<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<!-- Nav Item - Dashboard -->
<!-- Nav Item - Homepage Sewa -->
{{-- <li class="nav-item active">
    <a class="nav-link" href="{{url('/dashboard')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Homepage Sewa</span></a>
</li> --}}

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a href="home" class="nav-link collapsed" >
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="far fa-building"></i>
        <span>Jenis Sarana Prasarana</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Mobil:</h6> --}}
            <a class="collapse-item" href="{{ url ('user/sarana')}}">Sarana</a>
            <a class="collapse-item" href="{{ url ('user/prasarana')}}">Prasarana</a>
            <a class="collapse-item" href="{{ url ('user/kendaraan')}}">Kendaraan Dinas</a>
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="bi bi-receipt"></i>
        <span>Form Peminjaman</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Transaksi:</h6> --}}
            <a class="collapse-item" href="{{ url ('user/peminjaman_sarana')}}">Sarana Prasarana</a>
            {{--<a class="collapse-item" href="{{ url ('user/peminjaman_prasarana')}}">Prasarana</a>--}}       {{--Buat Controller di Folder Owner sesuai nama fitur--}}
            <a class="collapse-item" href="{{ url ('user/peminjaman_kendaraan')}}">Kendaraan Dinas</a>    {{--Buat Controller di Folder Owner sesuai nama fitur--}}
        </div>
    </div>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="bi bi-receipt"></i>
        <span>Form Pengembalian</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">Transaksi:</h6> --}}
            <a class="collapse-item" href="{{ url ('user/pengembalian_sarana')}}">Sarana Prasarana</a>
            {{--<a class="collapse-item" href="{{ url ('user/pengembalian_prasarana')}}">Prasarana</a>--}}      {{--Buat Controller di Folder Owner sesuai nama fitur--}}
            <a class="collapse-item" href="{{ url ('user/pengembalian_kendaraan')}}">Kendaraan Dinas</a>    {{--Buat Controller di Folder Owner sesuai nama fitur--}}
        </div>
    </div>
</li>



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>