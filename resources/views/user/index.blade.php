<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SARPRAS POLIWANGI</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('welcome')}}/css/bootstrap.css">

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="{{asset('welcome')}}/css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

  <!-- Custom styles for this template -->
  <link href="{{asset('welcome')}}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('welcome')}}/css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="tentang.blade.php">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Login
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Sign Up
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-lg-7 col-md-8 mx-auto">
            <div class="detail-box">
              <h1>
                SARPRAS<br>
              </h1>
              <p>
                Sarana Prasarana Politeknik Negeri Banyuwangi
              </p>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
 
    @include('layouts/app-layout/tentang')

    @include('layouts/app-layout/kontak')



  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span>
        <a href="https://poliwangi.ac.id/">Politeknik Negeri Banyuwangi</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('welcome')}}/js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="{{asset('welcome')}}/js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="{{asset('welcome')}}/js/custom.js"></script>


</body>
