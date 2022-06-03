<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpg" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="home" class="navbar-brand">
        <img src="{{ asset('img/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>U T S</b></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="home" class="nav-link">
              <i class="fa fa-home"></i>
              <b>Home</b>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fa fa-print"></i>
              <b>Cetak Invoice</b>
            </a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i>
            <b>Nomor Induk</b>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Nama Mahasiswa
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Nama Program Studi
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Nama Fakultas
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Nama Universitas
            </a>
            <div class="dropdown-divider"></div>
            <a href="/" class="dropdown-item dropdown-footer"><b>Keluar</b></a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: url('https://static.vecteezy.com/system/resources/previews/005/178/913/original/white-and-light-gray-diagonal-line-architecture-geometry-tech-abstract-subtle-background-illustration-eps-10-vector.jpg'); background-size: cover;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Registrasi <small>Ganjil 2022/2023</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="alert alert-info alert-dismissible">
          <h5 style="text-align: center;"><i class="icon fas fa-info"></i> Total SKS yang dapat anda ambil : <b>00</b> SKS</h5>
        </div>
        <div class="row">
          <div class="col-md-6">
            <a href="regis" type="button" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Tambah Matakuliah</a>
          </div>
        </div>
        <!-- /.row -->
        <br>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Matakuliah yang Diambil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Matakuliah</th>
                      <th>Kelas</th>
                      <th>SKS</th>
                      <th>Jadwal & Ruang</th>
                      <th>Dosen</th>
                      <th>Batal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>xxx</td>
                      <td>ipsum dolor sit amet salami</td>
                      <td style="text-align: center;">A</td>
                      <td style="text-align: center;">1</td>
                      <td>Hari; 00.00 - 00.00; XXX</td>
                      <td>lorem ipsum dolor sit amet</td>
                      <td>
                        <a class="btn btn-default">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>xxx</td>
                      <td>ipsum dolor sit amet salami</td>
                      <td style="text-align: center;">A</td>
                      <td style="text-align: center;">1</td>
                      <td>Hari; 00.00 - 00.00; XXX</td>
                      <td>lorem ipsum dolor sit amet</td>
                      <td>
                        <a class="btn btn-default">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>xxx</td>
                      <td>ipsum dolor sit amet salami</td>
                      <td style="text-align: center;">A</td>
                      <td style="text-align: center;">1</td>
                      <td>Hari; 00.00 - 00.00; XXX</td>
                      <td>lorem ipsum dolor sit amet</td>
                      <td>
                        <a class="btn btn-default">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>xxx</td>
                      <td>ipsum dolor sit amet salami</td>
                      <td style="text-align: center;">A</td>
                      <td style="text-align: center;">1</td>
                      <td>Hari; 00.00 - 00.00; XXX</td>
                      <td>lorem ipsum dolor sit amet</td>
                      <td>
                        <a class="btn btn-default">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('style/dist/js/demo.js') }}"></script>
</body>
</html>