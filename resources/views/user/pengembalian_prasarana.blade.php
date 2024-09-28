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
                          <h3 Style="color:black" class="text-center mb-5"><b>Pengembalian Prasarana</b></h3>
                  
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
                                                          
                                                        
                                                                  <form style="color:black;" action="{{ route('login') }}" method="post" class="user">
                                                                    @csrf
                                                                    <div class="mb-3">
                                                                      <label for="exampleFormControlInput1" class="form-label">Kegiatan</label>
                                                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Kegiatan">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                      <label for="exampleFormControlInput1" class="form-label">Tempat Kegiatan</label>
                                                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Kegiatan">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                      <label for="exampleFormControlInput1" class="form-label">Foto Prasarana Tampak Awal</label>
                                                                      <div class="">
                                                                        <input type="file" class="form-control" id="inputPassword3" placeholder="Foto">
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                      <label for="exampleFormControlInput1" class="form-label">Foto Prasarana Tampak Akhir</label>
                                                                      <div class="">
                                                                        <input type="file" class="form-control" id="inputPassword3" placeholder="Foto">
                                                                      </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                      <label for="exampleFormControlInput1" class="form-label">Tanggal & Waktu Pengembalian</label>
                                                                      <input type="datetime-local" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Pengembalian">
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
