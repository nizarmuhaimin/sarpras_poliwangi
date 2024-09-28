@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div style="background-color:rgb(224, 224, 224);"id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Sarana</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Hasil Laporan</a>
                </div> --}}

                <!-- Content Row -->
                <div class="row">
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                          <h3 Style="color:black" class="text-center mb-5"><b>Tambah Data Kendaraan Dinas</b></h3>
                  
                            <div class="container">
                              <!-- Outer Row -->
                              <div class="row justify-content-center">
                                  <div class="col-xl-11  col-lg-6 col-md-3">
                                      <div class="card o-hidden border-0 shadow-lg my-5">
                                          <div class="card-body p-0">
                                              <!-- Nested Row within Card Body -->
                                              <div class="row">
                                                  
                                                  <div class="col-lg-12">
                                                      <div class="p-5">
                                                          {{-- <div class="text-center">
                                                              <img src="{{asset('img/logo-poliwangi.png')}}"  alt="Deskripsi Gambar" width="160" >
                                                              <h1 class="h4 text-gray-900 mb-4">Welcome Back Draivi!</h1>
                                                          </div> --}}
                                                          
                                                          <form style="color:black;" action="{{ route('owner.kelola_create') }}" method="post" class="user">
                                                                  @csrf
                                                                  <div class="mb-3">
                                                                    <label for="nama_sarana" class="form-label">Nama Sarana</label>
                                                                    <input type="" class="form-control" name="nama_sarana" id="nama_sarana" placeholder="Nama Sarana" >
                                                                  </div>                                                              <div class="mb-3">
                                                                    <label for="nama_prasarana" class="form-label">Nama Prasarana</label>
                                                                    <input type="" class="form-control" name="nama_prasarana" id="nama_prasarana" placeholder="Nama Sarana" >
                                                                  </div>                                                              <div class="mb-3">
                                                                    <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
                                                                    <input type="" class="form-control" name="nama_kendaraan" id="nama_kendaraan" placeholder="Nama Sarana" >
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="foto" class="form-label">Foto</label>
                                                                    <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="nopol" class="form-label">Nomor Polisi</label>
                                                                    <input type="text" class="form-control" name="nopol" id="nopol" placeholder="Foto Sarana">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="tipe" class="form-label">Tipe Prasarana</label>
                                                                    <input type="text" class="form-control" name="tipe" id="tipe" placeholder="Foto Sarana">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="jenis" class="form-label">Jenis</label>
                                                                    <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Foto Sarana">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                                                    <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="stok_awal" class="form-label">Stok Awal</label>
                                                                    <input type="text" class="form-control" name="stok_awal" id="stok_awal" placeholder="Stok Awal">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="stok_tersedia" class="form-label">Stok Tersedia</label>
                                                                    <input type="text" class="form-control" name="stok_tersedia" id="stok_tersedia" placeholder="Stok Tersedia">
                                                                  </div>
                                                                  
                                                                  
                                                              <button type="submit" class="btn btn-dark btn-user btn-block" href="">Tambahkan</button>
                                                          </form>
                                                      </div>
                                                  </div>
                                                  
                                              </div>
                                          </div>
                                      </div>
                      
                                  </div>
                      
                              </div>
                      
                          </div>

                          </div>
                        </div>
                      </section> 
                    {{--  --}}
                </div>

                <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->

     


@endsection
