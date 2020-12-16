<?php $thisPage="fees"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Lihat SPP Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Lihat SPP Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Lihat SPP Siswa/i</li>
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
                                            <label>StudentID</label>
                                            <input type="text" class="form-control" name="student_id" id="student_id" value="{{ $fee->student_id }}" placeholder="Student ID">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Juli</label>
                                            <input type="text" class="form-control" name="july" id="july" value="{{ $fee->july }}" placeholder="Juli">
                                        </div>
                                        <div class="col-6">
                                            <label>Agustus</label>
                                            <input type="text" class="form-control" name="august" id="august" value="{{ $fee->august }}" placeholder="Agustus">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>September</label>
                                            <input type="text" class="form-control" name="september" id="september" value="{{ $fee->september }}" placeholder="September">
                                        </div>
                                        <div class="col-6">
                                            <label>Oktober</label>
                                            <input type="text" class="form-control" name="october" id="october" value="{{ $fee->october }}" placeholder="Oktober">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>November</label>
                                            <input type="text" class="form-control" name="november" id="november" value="{{ $fee->november }}" placeholder="November">
                                        </div>
                                        <div class="col-6">
                                            <label>Desember</label>
                                            <input type="text" class="form-control" name="december" id="december" value="{{ $fee->december }}" placeholder="Desember">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Januari</label>
                                            <input type="text" class="form-control" name="january" id="january" value="{{ $fee->january }}" placeholder="Januari">
                                        </div>
                                        <div class="col-6">
                                            <label>Februari</label>
                                            <input type="text" class="form-control" name="february" id="february" value="{{ $fee->february }}" placeholder="Februari">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Maret</label>
                                            <input type="text" class="form-control" name="march" id="march" value="{{ $fee->march }}" placeholder="Maret">
                                        </div>
                                        <div class="col-6">
                                            <label>April</label>
                                            <input type="text" class="form-control" name="april" id="april" value="{{ $fee->april }}" placeholder="April">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Mei</label>
                                            <input type="text" class="form-control" name="may" id="may" value="{{ $fee->may }}" placeholder="Mei">
                                        </div>
                                        <div class="col-6">
                                            <label>Juni</label>
                                            <input type="text" class="form-control" name="june" id="june" value="{{ $fee->june }}" placeholder="June">
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