@extends('user.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div style="background-color:rgb(224, 224, 224);"id="content">

            @include('user.component.navbar')

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
                          <h3 Style="color:black" class="text-center mb-5"><b>Peminjaman Sarana Prasarana</b></h3>
                  
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
                                                          
                                                          <form style="color:black;" action="{{ route('user.peminjaman_create') }}" method="post" class="user">
                                                                  @csrf
                                                                  <div class="mb-3">
                                                                    <label for="nim" class="form-label">NIM/NIK/NIP/NIPPPK</label>
                                                                    <input type="" class="form-control" name="nim" id="nim" placeholder="NIK/NIK/NIP/NIPPPK" >
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="kegiatan" class="form-label">Kegiatan</label>
                                                                    <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="Nama Kegiatan">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="tempat_kegiatan" class="form-label">Tempat Kegiatan</label>
                                                                    <input type="text" class="form-control" name="tempat kegiatan" id="tempat_kegiatan" placeholder="Tempat Kegiatan">
                                                                  </div>
                                                                  <div hidden class="mb-3">
                                                                    <label for="jenis" class="form-label">Jenis</label>
                                                                    <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="tgl_waktu_peminjaman" class="form-label">Tanggal & Waktu Peminjaman</label>
                                                                    <input type="datetime-local" class="form-control" name="tgl_waktu_peminjaman" id="tgl_waktu_peminjaman" placeholder="Tanggal & Waktu Peminjaman">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="tgl_waktu_pengembalian" class="form-label">Tanggal & Waktu Pengembalian</label>
                                                                    <input type="datetime-local" class="form-control" name="tgl_waktu_pengembalian" id="tgl_waktu_pengembalian" placeholder="Tanggal & Waktu Pengembalian">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="nama_user" class="form-label">Nama User</label>
                                                                    <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="email_user" class="form-label">Email User</label>
                                                                    <input type="text" class="form-control" name="email_user" id="email_user" placeholder="Email User">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="status" class="form-label">Status</label>
                                                                    <input type="text" class="form-control" name="status" id="status" placeholder="Status">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="users_id" class="form-label">User Id</label>
                                                                    <input type="text" class="form-control" name="users_id" id="users_id" placeholder="User Id">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="sarana_id" class="form-label">Sarana Id</label>
                                                                      
                                                                    
                                                                    {{--<input type="text" class="form-control" name="sarana_id" id="sarana_id" placeholder="Sarana Id">--}}
                                                                  
                                                                    <div     class="form-group">
                                            
                                                                      <select id="sarana_id" class="form-select form-control" name="sarana_id" >
                                                                          <option>Pilih Sarana yang Dipinjam</option>
                                                                          <option value="0" selected>Sarana</option>
                                                                          <option value="0">Aula Abdullah Azwar Anas</option>
                                                                        <option value="1">Aula Gedung B L.5</option>
                                                                      </select>
                                                                  </div>
                                                                      
                                                                
                                                                    
                                                                  </div>
                                                                  <div class="form-group row">
                                                                    <label for="foto_awal" class="form-label">Foto Tampak Awal</label>
                                                                    <div class="">
                                                                      <input type="file" class="form-control" name="foto_awal" id="inputPassword3" placeholder="Foto">
                                                                    </div>
                                                                  </div>
                                                                  <div class="mb-3">
                                                                    <label for="jenis" class="form-label">Jenis</label>
                                                                    <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis">
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
