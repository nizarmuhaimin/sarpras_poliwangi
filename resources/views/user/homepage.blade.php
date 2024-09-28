@extends('user.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('user.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Dashboard Pengguna</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Hasil Laporan</a>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div style="color:black; font-size:15px;"class="text-xs font-weight-bold text-uppercase mb-1">
                                            Barang Tersedia</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">65 Unit</div>
                                        <a class="h6 mb-0 font-weight-bold text-primary-800">
                                            Selengkapnya</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div style="color:black; font-size:15px;"class="text-xs font-weight-bold text-uppercase mb-1 " class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Pengajuan Di Setujui</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">9</div>
                                        <a class="h6 mb-0 font-weight-bold text-primary-800">Selengkapnya</a>
                                    </div>
                                    
                                    <div class="col-auto">
                                        <i class="fas fa-check-square fa-2x text-gray-300"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div style="color:black; font-size:15px;"class="text-xs font-weight-bold text-uppercase mb-1 " class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Pengajuan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        <a class="h6 mb-0 font-weight-bold text-primary-800">Selengkapnya</a>
                                    </div>
                                    
                                    <div class="col-auto">
                                        <i class="fas fa-archive fa-2x text-gray-300"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div style="color:black; font-size:15px;"class="text-xs font-weight-bold text-uppercase mb-1 " class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Pengajuan Di Tolak</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                        <a class="h6 mb-0 font-weight-bold text-primary-800">Selengkapnya</a>
                                    </div>
                                    
                                    <div class="col-auto">
                                        <i class="fas fa-window-close fa-2x text-gray-300"></i>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  --}}
                </div>

                <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->

     


@endsection
