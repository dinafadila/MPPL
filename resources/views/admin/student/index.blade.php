<?php $thisPage="students"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Data Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Data Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Data Siswa/i</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->

    <!-- Main content -->
<section class="content">

      <!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Siswa/i</h3>
        <div class="card-tools">
            <a class="btn btn-info btn-sm" href="{{ route('student.create') }}">
                <i class="fas fa-plus fa" aria-hidden="true" ></i>
                Tambah Siswa/i
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        No.
                    </th>
                    <th style="width: 5%">
                        Nama Siswa/i
                    </th>
                    <th style="width: 5%">
                        Jenis Kelamin
                    </th>
                    <th style="width: 5%">
                        Nama Ayah
                    </th>
                    <th style="width: 5%">
                        Nama Ibu
                    </th>
                    <th style="width: 5%">
                        Alamat
                    </th>
                    <th style="width: 8%">
                        No. Telepon
                    </th>
                    <th style="width: 5%">
                        Pengaturan
                    </th>
                </tr>
            </thead>
            @php
            $idx = 1;
            @endphp
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        {{ $idx++ }}
                    </td>
                    <td>
                        {{ $student->name }}
                    </td>
                    <td>
                        {{ $student->gender }}
                    </td>
                    <td>
                        {{ $student->father_name }}
                    </td>
                    <td>
                        {{ $student->mother_name }}
                    </td>
                    <td>
                        {{ $student->address }}
                    </td>
                    <td>
                        {{ $student->phone }}
                    </td>
                    <td class="project-actions">
                        <form action="{{ route('student.destroy', $student->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('student.edit', $student->id) }}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('student.show', $student->id) }}">
                                <i class="fas fa-pencil-alt"></i>
                                Lihat
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <!-- /.card-body -->
</div>

</section>
    <!-- /.content -->
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