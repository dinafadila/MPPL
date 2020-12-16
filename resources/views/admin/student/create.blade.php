<?php $thisPage="students"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Tambah Data Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Tambah Data Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Tambah Data Siswa/i</li>
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
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="tab-content">
                            <!-- Edit Biodata -->
                            <div id="biodata">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form role="form" action="{{ route('student.store') }}" method="POST">
                                    <!-- row 0 -->
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label>UserID</label>
                                            <input type="text" class="form-control" name="user_id" id="user_id" placeholder="User ID">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Nama Siswa</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Siswa">
                                        </div>
                                        <div class="col-6">
                                            <label>Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="gender" id="gender" placeholder="Jenis Kelamin">
                                        </div>
                                    </div>
                                    <!-- row 1 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="place_of_birth" id="place_of_birth" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Tanggal Lahir">
                                        </div>
                                    </div>
                                    <!-- row 2 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Agama</label>
                                            <input type="text" class="form-control" name="religion" id="religion" placeholder="Agama">
                                        </div>
                                        <div class="col-6">
                                            <label>Tanggal Masuk</label>
                                            <input type="date" class="form-control" name="date_of_entry" id="date_of_entry" placeholder="Tanggal Masuk">
                                        </div>
                                    </div>
                                    <!-- row 3 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Alamat">
                                        </div>
                                        <div class="col-6">
                                            <label>No. Telepon</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="No. Telepon">
                                        </div>
                                    </div>
                                    <!-- row 4 -->
                                    <div class="form-group row">
                                        <div class="col-6">
                                            <label for="">Nama Ayah</label>
                                            <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Nama Ayah">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Nama Ibu</label>
                                            <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Nama Ibu">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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