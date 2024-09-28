@extends('owner.component.main')

@section('content')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include('owner.component.navbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Sarana</h6>
                </div>
                <div class="card-body">

                <form class="row g-3" method="POST" action="{{route('owner.saranaStore')}}" enctype="multipart/form-data">
                  @csrf
                    {{-- <div class="col-md-6">
                      <label for="user_id" class="form-label">User Id</label>
                      <input type="text" class="form-control disabled" id="user_id" name="user_id" value="{{$user_id->id}}" readonly>
                    </div> --}}
                    <div class="mb-3">
                      <label for="nama_mobil" class="form-label">Nama Sarana</label>
                      <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" required data-validation-required-message="Tidak boleh kosong" >
                    </div>
                    
                    <div class="col-md-12">
                      <label for="deskripsi" class="form-label">Deskripsi Tentang Tempat</label>
                      <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required data-validation-required-message="Tidak boleh kosong" placeholder="Tulis Deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="photo" class="form-label">Pilih Foto</label>
                      <input class="form-control" type="file" id="photo" name="photo">
                    </div>
                    
                    <div class="col-12 pt-4">
                      <button type="submit" class="btn btn-dark col-12" required data-validation-required-message="Tidak boleh kosong">Tambahkan</button>
                    </div>
                  </form>




              <!-- Content Row -->
        </div>
    </div>
        </div>

            <!-- /.container-fluid -->

@endsection
