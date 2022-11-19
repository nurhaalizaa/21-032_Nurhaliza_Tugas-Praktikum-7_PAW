<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>{{$title}}</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Simple Siakad</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{($title === "Data Mahasiswa") ? 'active' : ''}}" href="/">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === "Input Data") ? 'active' : ''}}" href="/tambah">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{($title === "About Me") ? 'active' : ''}}" href="/about">About Me</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container mt-4">
        @yield('container')
      </div>

      <!-- Remove the container if you want to extend the Footer to full width. -->
<div class=" my-5">

  <footer class="bg-primary text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class=" shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
            <img src="/gambar/utm.png" height="150" alt=""
                 loading="lazy" />
          </div>

          <h6 >Jurusan Teknik Informatika</h6>
          <h6 >Universitas Trunojoyo Madura</h6>
          <p >Jl. Raya Telang, Kecamatan Kamal, Bangkalan
            69162 Indonesia <br> Kampus Universitas Trunojoyo Madura
          </p>

          {{-- <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul> --}}

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Telp : 031-3011146</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Fax : 031-3011506</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Email : if.it@trunojoyo.ac.id</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Layanan</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pembayaran UKT </a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pendaftaran KP</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pendaftaran Wisuda</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Administrasi</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Resource</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>e-Journal</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Portal Tugas Ahir</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Website Resmi Kampus</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Download Administrasi</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2022 Copyright:Nurhaliza
    </div>
    <!-- Copyright -->
  </footer>

</div>
<!-- End of .container -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>

</html>