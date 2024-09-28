@extends('owner.component.main')

@section('content')

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    @include('owner.component.navbar')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Peminjaman Sarana Prasarana</h1>
    

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{--<div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mobil</h6>
        </div>--}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Nama</th>
                            <th class="align-middle">Email</th>
                            <th class="align-middle">NIM/NIK/NIP/NIPPPK</th>
                            <th class="align-middle">Kegiatan</th>
                            <th class="align-middle">Tempat Kegiatan</th>
                            <th class="align-middle">Tgl & Waktu Peminjaman</th>
                            <th class="align-middle">Tgl & Waktu Pengembalian</th>
                            <th class="align-middle">Status</th>
                            <th class="align-middle">Aksi</th>
                        </tr>
                    </thead>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                    <tbody>
                        
							{{-- <tr>
								<td>1</td>
                                <td>nama</td>
								<td>foto<img src="" width="100px"></td>
								<td>aa</td>
								<td>bb</td>
								<td>nn</td>
                                <td>ok</td>
								<td>hh</td>
								
								
								<td>
                                    <a style="color:rgb(0, 255, 0)" href="" class="fas fa-check-square"></a>
                                    <a style="color:rgb(255, 0, 0)"href=""  class="fas fa-window-close"  ></a>
                                </td>
							</tr> --}}
                            
                            @foreach($allDataPinjam as $key => $data1)
							<tr>
								<td class="align-middle">{{$key+1}}</td>
								<td class="align-middle">{{$data1->nama_user}}</td>
								<td class="align-middle">{{$data1->email_user}}</td>
                                <td class="align-middle">{{$data1->nim}}</td>
								<td class="align-middle">{{$data1->kegiatan}}</td>
								<td class="align-middle">{{$data1->tempat_kegiatan}}</td>
                                <td class="align-middle">{{$data1->tgl_waktu_peminjaman}}</td>
								<td class="align-middle">{{$data1->tgl_waktu_pengembalian}}</td>
								<td class="align-middle">{{$data1->status}}</td>
								

								<td class="align-middle">
                                    <a style="color:rgb(0, 255, 0)" href="" class="fas fa-check-square"></a>
                                    <a style="color:rgb(255, 0, 0)"href=""  class="fas fa-window-close"  ></a>
                                </td>
							</tr>
                            @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



@endsection