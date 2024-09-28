@extends('owner.component.main')

@section('content')

 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
    @include('owner.component.navbar')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Kelola Data Sarana Prasarana</h1>
        </a>
        <!-- Dropdown - Menu Information -->
        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-secondary">Sarana</button>
            <button type="button" class="btn btn-secondary">Prasarana</button>
            <button type="button" class="btn btn-secondary">Kendaraan Dinas</button>
          
            <div class="btn-group" role="group">

        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                <span><i class="fa fa-plus fa-sm text-dark-50" ></i> Tambah Data 
                </span>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('owner.tambah_sarana')}}">Sarana</a></li>
              <li><a class="dropdown-item" href="{{route('owner.tambah_prasarana')}}">Prasarana</a></li>
              <li><a class="dropdown-item" href="{{route('owner.tambah_kendaraan_dinas')}}">Kendaraan Dinas</a></li>
            </ul>
          </div>
            </div>
        </div>
        {{-- Card Body & Table --}}
        <div class="card-body">
            
              
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        
                        <tr>
                            <th class="align-middle">No</th>
                            <th class="align-middle">Nama Sarpras</th>
                            <th class="align-middle">Foto Sarpras</th>
                            <th class="align-middle">Deskripsi</th>
                            <th class="align-middle">Stok Awal</th>
                            <th class="align-middle">Stok Tersedia</th>
                            <th class="align-middle">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($allDataKelola as $key=> $kelola1)
							<tr>
								<td class="align-middle">{{$key+1}}</td>
                                <td class="align-middle">{{$kelola1->nama}}</td>
								<td><img src="{{ asset ('storage/'.$kelola1->sarana_photo_path)}}" width="100px"></td>
                                <td class="align-middle">{{$kelola1->deskripsi}}</td>
                                <td class="align-middle">{{$kelola1->stok_awal}}</td>
                                <td class="align-middle">{{$kelola1->stok_tersedia}}</td>
								<td class="align-middle">
                                    <a style="color:rgb(0, 255, 106)" href="" class="fas fa-sync"></a>
                                    <a style="color:rgb(0, 0, 255)" href="" class="fa fa-plus"></a>

                                </td>
							</tr>
                            @endforeach
                            <tr><td></td><td></td></tr>
                            <tr><td></td><td></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



@endsection