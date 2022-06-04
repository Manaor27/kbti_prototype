
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link rel="icon" href="{{ asset('img/logo.jpg') }}" type="image/jpg" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown" role="button">
          <i class="fas fa-user"> Nama User</i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              Jabatan
            </a>
            <div class="dropdown-divider"></div>
            <a href="/dosen" class="dropdown-item dropdown-footer"><b>Keluar</b></a>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{ asset('img/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">U T S</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ID User</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Mahasiswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="matakuliah" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Data Matakuliah
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background: url('https://static.vecteezy.com/system/resources/previews/005/178/913/original/white-and-light-gray-diagonal-line-architecture-geometry-tech-abstract-subtle-background-illustration-eps-10-vector.jpg'); background-size: cover;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Registrasi Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>SKS</th>
                    <th>Angkatan</th>
                    <th>Lihat</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  <tr>
                    <td>XXX</td>
                    <td>Lorem ipsum dolor sit</td>
                    <td>1</td>
                    <td>00</td>
                    <td><a href="detail" class="btn btn-success">Lihat</a></td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('style/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('style/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('style/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('style/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('style/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('style/dist/js/demo.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>