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
                    <h1 class="h3 mb-0 text-gray-800">Detail Sarana</h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Hasil Laporan</a>
                </div>

                <!-- Content Row -->
                <div class="">
                    <section class="">
                        <div class="">
               
                        <style>
                          * {
                            box-sizing: border-box;
                          }
                          
                          .row {
                            display: flex;
                          }
                          
                          /* Create two equal columns that sits next to each other */
                          .column1{
                            flex: 30%;
                            padding: 10px;
                            height: 300px; /* Should be removed. Only for demonstration */
                          }
                          .column2{
                            flex: 70%;
                            padding: 10px;
                            height: 300px; /* Should be removed. Only for demonstration */
                          }
                          </style>
                          <div class="row">
                            <div class="column1" style="background-color:rgba(255, 255, 255, 0);">
                              <img style="width:280px; height:250px;" src="{{asset('img/Aula Abdullah Azwar Anas.jpg')}}">
                            </div>
                            <div class="column2" style="color:black; background-color:rgba(255, 255, 255, 0);">
                              <h2>Aula Abdullah Azwar Anas</h2>
                              <p>Salah satu bangunan Kampus Poliwangi yang tidak meninggalkan unsur Budaya Banyuwangi dan juga merupakan gagasan Bupati Anas. Dan diresmikan dengan nama Aula Abdullah Azwar Anas.</p>
                              <div class="column2 card-footer border-top-0 bg-transparent">
                                <div class="">
                                  {{-- <a class="btn btn-primary mt-auto"  href="{{route('user.sewa_add',$mobil->id)}}" target="blank">Sewa</a> --}}
                                  <a
                                    class="btn btn-outline-dark mt-auto text-black"
                                    href="{{route('user.prasarana_proyektor')}}"
                                    target="blank">Lihat Jadwal</a>
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
