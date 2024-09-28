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
                    <h1 class="h3 mb-0 text-gray-800">Sarana</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Hasil Laporan</a>
                </div>

                <!-- Content Row -->
                <div class="row">
                    <section class="py-5">
                        <div class="container px-4 px-lg-5 mt-5">
                          <h3 Style="color:black" class="text-center mb-5"><b>Daftar Sarana </b></h3>
                          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                  
                            
                            {{-- @foreach ($allDataKendaraan as $key => $kendaraan) --}}
                            <div class="col mb-5">
                              <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                                  Tersedia
                                </div>
                                <!-- Product image-->
                               {{-- @if ($mobil->mobil_photo_path != '') --}}
                               {{-- <img --}}
                               {{-- class="card-img-top" style="height: 200px; width 350px; object-fit: cover" src="{{ asset ('storage/'.$mobil->mobil_photo_path)}}" alt="..."/> --}}
                               
                               {{-- @else --}}
                               <img class="card-img-top" style="height: 200px; width 350px; object-fit: cover"src="{{asset('img/tempat.jpeg')}}" alt="...">
                                   
                               {{-- @endif --}}
                               
                                <!-- Product details-->
                                <div class="card-body card-body-custom pt-4">
                                  <div class="text-center">
                                    <div style="font-family: ;
                                    font-weight: ExtraBold;
                                    font-size: 25px; color:black;">
                                    <span>Aula Gedung B Lantai 5</span>
                                    </div>
                                    <div style="font-family: ;
                                    font-weight: ExtraBold;
                                    font-size: 20px;">
                                    <span></span>
                                    </div>
                                  </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer border-top-0 bg-transparent">
                                  <div class="text-center">
                                    {{-- <a class="btn btn-primary mt-auto"  href="{{route('user.sewa_add',$mobil->id)}}" target="blank">Sewa</a> --}}
                                    <a
                                      class="btn btn-outline-dark mt-auto text-black"
                                      {{-- href="{{route('user.detail',$mobil->id)}}" --}}
                                      target="blank">Selengkapnya</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            {{-- @endforeach --}}

                            {{-- @foreach ($allDataKendaraan as $key => $kendaraan) --}}
                            <div class="col mb-5">
                                <div class="card h-100">
                                  <!-- Sale badge-->
                                  <div class="badge badge-custom bg-success text-white position-absolute" style="top: 0; right: 0">
                                    Tersedia
                                  </div>
                                  <!-- Product image-->
                                 {{-- @if ($mobil->mobil_photo_path != '') --}}
                                 {{-- <img --}}
                                 {{-- class="card-img-top" style="height: 200px; width 350px; object-fit: cover" src="{{ asset ('storage/'.$mobil->mobil_photo_path)}}" alt="..."/> --}}
                                 
                                 {{-- @else --}}
                                 <img class="card-img-top" style="height: 200px; width 350px; object-fit: cover"src="{{asset('img/AulaPoliwangi.jpg')}}" alt="...">
                                     
                                 {{-- @endif --}}
                                 
                                  <!-- Product details-->
                                  <div class="card-body card-body-custom pt-4">
                                    <div class="text-center">
                                      <div style="font-family: ;
                                      font-weight: ExtraBold;
                                      font-size: 25px; color:black;">
                                      <span>Aula Abdullah Azwar Annas</span>
                                      </div>
                                      <div style="
                                      font-weight: ExtraBold;
                                      font-size: 20px;">
                                      <span></span>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Product actions-->
                                  <div class="card-footer border-top-0 bg-transparent">
                                    <div class="text-center">
                                      {{-- <a class="btn btn-primary mt-auto"  href="{{route('user.sewa_add',$mobil->id)}}" target="blank">Sewa</a> --}}
                                      <a
                                        class="btn btn-outline-dark mt-auto text-black"
                                        {{-- href="{{route('user.detail',$mobil->id)}}" --}}
                                      href="{{route('user.detail_sarana')}}"
                                        target="blank">Selengkapnya</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- @endforeach --}}     
                          </div>
                        </div>
                      </section> 
                    {{--  --}}
                </div>

                <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->

     


@endsection
