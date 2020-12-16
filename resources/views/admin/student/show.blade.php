<?php $thisPage="students"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Lihat Data Siswa/i</title>
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ url('lte/lte/plugins/fontawesome-free/css/all.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ url('lte/lte/dist/css/adminlte.min.css') }}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
@include('admin/header')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@include('admin/sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Lihat Data Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Lihat Data Siswa/i</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- header content sebelah foto profil -->
            <div class="col-md-12">
                <div class="card">
                    <!-- content sebelah foto profil -->
                    <div class="card-body">
                        <div class="tab-content">
                            <!-- Edit Biodata -->
                            <div id="biodata">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label>UserID</label>
                                            <a class="form-control">{{ $student->user_id }}</a>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Nama Siswa</label>
                                            <a class="form-control">{{ $student->name }}</a>
                                        </div>
                                        <div class="col-6">
                                            <label>Jenis Kelamin</label>
                                            <a class="form-control">{{ $student->gender }}</a>
                                        </div>
                                    </div>
                                    <!-- row 1 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Tempat Lahir</label>
                                            <a class="form-control">{{ $student->place_of_birth }}</a>
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <a class="form-control">{{ $student->date_of_birth }}</a>
                                        </div>
                                    </div>
                                    <!-- row 2 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Agama</label>
                                            <a class="form-control">{{ $student->religion }}</a>
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Masuk</label>
                                            <a class="form-control">{{ $student->date_of_entry }}</a>
                                        </div>
                                    </div>
                                    <!-- row 3 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Alamat</label>
                                            <a class="form-control">{{ $student->address }}</a>
                                        </div>
                                        <div class="col-6">
                                            <label>No. Telepon</label>
                                            <a class="form-control">{{ $student->phone }}</a>
                                        </div>
                                    </div>
                                    <!-- row 4 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label for="">Nama Ayah</label>
                                            <a class="form-control">{{ $student->father_name }}</a>
                                        </div>
                                        <div class="col-6">
                                            <label for="">Nama Ibu</label>
                                            <a class="form-control">{{ $student->mother_name }}</a>
                                        </div>
                                    </div>
                            </div>
                            <!-- stop setting -->
                        </div>
                    </div>
                    <!-- stop content sebelah foto -->
                </div>
            </div>
            <!-- stop header content sebelah foto profil -->
        </div>
    </div>
</section>
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
@include('admin/footer')

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('lte/lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('lte/lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('lte/lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('lte/lte/dist/js/demo.js') }}"></script>
</body>
</html>