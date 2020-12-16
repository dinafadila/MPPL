<?php $thisPage="fees"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Data SPP Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Data SPP Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Data SPP Siswa/i</li>
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
        <h3 class="card-title">Data SPP</h3>
        <div class="card-tools">
            <a class="btn btn-info btn-sm" href="{{ route('fee.create') }}">
                <i class="fas fa-plus fa" aria-hidden="true" ></i>
                Tambah SPP
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th>
                        Nama Siswa
                    </th>
                    <th>
                        Jul
                    </th>
                    <th>
                        Agu
                    </th>
                    <th>
                        Sep
                    </th>
                    <th>
                        Okt
                    </th>
                    <th>
                        Nov
                    </th>
                    <th>
                        Des
                    </th>
                    <th>
                        Jan
                    </th>
                    <th>
                        Feb
                    </th>
                    <th>
                        Mar
                    </th>
                    <th>
                        Apr
                    </th>
                    <th>
                        Mei
                    </th>
                    <th>
                        Pengaturan
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fees as $fee)
                <tr>
                    <td>
                        {{ $fee->student_id }}
                    </td>
                    <td>
                        {{ $fee->july }}
                    </td>
                    <td>
                        {{ $fee->august }}
                    </td>
                    <td>
                        {{ $fee->september }}
                    </td>
                    <td>
                        {{ $fee->october }}
                    </td>
                    <td>
                        {{ $fee->november }}
                    </td>
                    <td>
                        {{ $fee->december }}
                    </td>
                    <td>
                        {{ $fee->january }}
                    </td>
                    <td>
                        {{ $fee->february }}
                    </td>
                    <td>
                        {{ $fee->march }}
                    </td>
                    <td>
                        {{ $fee->april }}
                    </td>
                    <td>
                        {{ $fee->may }}
                    </td>
                    <td class="project-actions text-right">
                        <form action="{{ route('fee.destroy', $fee->id) }}" method="POST">
                            <a class="btn btn-info btn-sm" href="{{ route('fee.edit', $fee->id) }}">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{ route('fee.show', $fee->id) }}">
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