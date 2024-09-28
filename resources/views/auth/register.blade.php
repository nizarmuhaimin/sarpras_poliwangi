<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sarana & Prasarana - Daftar</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset ('backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset ('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body style="background-color:rgb(00, 48, 78)">
    <div style="
    width: 100px;
    height: 100px;
    stop: 100px;
    left: 100px;
    overflow: hidden;"></div>
<div class="text-center">
<img src="{{asset('img/logo-poliwangi.png')}}"  alt="Deskripsi Gambar" width="180" >
<div style="
    width: 25px;
    height: 25px;
    stop: 25px;
    left: 25px;
    overflow: hidden;"></div>
<div class="text-center"
style="
/* width: 578px; */
color: rgba(255,255,255,1);
top: 404px;
/* left: 671px; */

font-weight: ExtraBold;
font-size: 20px;">
DAFTAR AKUN SARANA DAN PRASARANA</div>
<div style="
/* width: 578px; */
color: rgba(255,255,255,1);
top: 404px;
/* left: 671px; */
/* bottom: 20px; */
font-family: ;
font-weight: ExtraBold;
font-size: 20px;">
POLITEKNIK NEGERI BANYUWANGI</div>
</div>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="">
                <div class="card  shadow-lg my-5">
                    <div class="card-body ">
                        <!-- Nested Row within Card Body -->
                        <!-- <div class="row"> -->
                            
                            <div class="col-lg-12">
                                {{-- <div class="p-12">
                                    <div class="text-center">
                                        <img src="{{asset('img/logo-poliwangi.png')}}"  alt="Deskripsi Gambar" width="160">
                                        <h1 class="h4 text-gray-900 mb-4">Register - Draivi!</h1>
                                    </div> --}}
                                    <form method="POST" action="{{ route('register') }}" class="user">
                                            @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="name" id="name"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Email" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                                id="exampleInputPassword" placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password_confirmation"
                                                id="exampleInputPassword" placeholder="Konfirmasi Password" />
                                        </div>

                                        <div     class="form-group">
                                            
                                            <select id="type" class="form-select form-control" name="type" >
                                                <option>Pilih Jenis Pengguna</option>
                                                <option value="0" selected>User</option>
                                                <option value="0">User</option>
                                              <option value="1">Owner</option>
                                            </select>
                                        </div>

                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-jet-label for="terms">
                                                <div class="flex items-center">

                                                    <div style="
                                                    font-weight: Medium;
                                                    font-size: 15px;" class="ml-2">
                                                    <x-jet-checkbox name="terms" id="terms"/>

                                                        {!! __('Saya setuju dengan :terms_of_service & :privacy_policy', [
                                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Syarat').'</a>',
                                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Ketentuan').'</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-jet-label>
                                        </div>
                                    @endif                                     
                                        {{-- <x-jet-button class=" btn btn-dark btn-user btn-block">
                                            {{ __('Register') }}
                                        </x-jet-button> --}}
                                        <button type="submit" class="btn btn-dark btn-user btn-block">Daftar</button>
                                        {{-- <button type="submit" class="btn btn-dark btn-user btn-block" href="{{ ('auth.login') }}">LOGIN</button> --}}
                                    </form>
                                    <hr>
                                    <a style="
                                    font-weight: Medium;
                                    font-size: 15px;" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Sudah Memiliki Akun? - Masuk') }}
                                    </a>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset ('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset ('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset ('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset ('backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>