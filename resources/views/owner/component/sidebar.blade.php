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
            <span><h2 style="font-size:20px; text-transform: capitalize;">Nizar{{--$namauser->name--}} | Pengelola {{--$roleuser--}}</h2>
                <h3 style="font-size:12px; text-transform: lowercase;">nizarmuhaimin@gmail.com</h3>
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
        <a href="dashboard" class="nav-link collapsed" >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    
    <li class="nav-item">
        <a href="{{ url ('owner/kelola_data')}}" class="nav-link collapsed" >
            <i class="far fa-building"></i>
            <span>Kelola Sarana Prasarana</span>
        </a>
    </li>

    <li class="nav-item">
        <a  href="{{ url ('owner/persetujuan')}}" class="nav-link collapsed" >
            <i class="fas fa-sync"></i>
            <span>Kelola Peminjaman</span>
        </a>
    </li>
    
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>