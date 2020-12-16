<?php $thisPage="reports"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Lihat Rapot Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Lihat Rapot Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Lihat Rapot Siswa/i</li>
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
                                    <div class="col-6">
                                        <label>StudentID</label>
                                        <a class="form-control">{{ $report->student_id }}</a>
                                    </div>
                                    <div class="col-6">
                                        <label>Kelas</label>
                                        <a class="form-control">{{ $report->group }}</a>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-6">
                                        <label>Semester</label>
                                        <a class="form-control">{{ $report->semester }}</a>
                                    </div>
                                    <div class="col-6">
                                        <label>Tahun Pelajaran</label>
                                        <a class="form-control">{{ $report->school_year }}</a>
                                    </div>
                                  </div>
                                  <a>A. BIDANG PENGEMBANGAN PEMBENTUKAN PERILAKU</a>
                                  <!-- row 1 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>1. Nilai-nilai Agama dan Moral</label>
                                        <a class="form-control">{{ $report->religion_and_moral }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 2 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>2. Sosial, Emosional dan Kemandirian</label>
                                        <a class="form-control">{{ $report->social_emotional_and_autonomy }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <a>B. BIDANG PENGEMBANGAN KEMAMPUAN DASAR</a>
                                  <!-- row 1 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>1. Bahasa</label>
                                        <a class="form-control">{{ $report->language }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 2 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>2. Kognitif</label>
                                        <a class="form-control">{{ $report->cognitive }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 3 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                        <!-- textarea -->
                                        <div class="form-group">
                                          <label>3. Fisik</label>
                                          <a class="form-control">{{ $report->physical }}</a>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- row 4 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                        <!-- textarea -->
                                        <div class="form-group">
                                          <label>4. Seni</label>
                                          <a class="form-control">{{ $report->art }}</a>
                                        </div>
                                    </div>
                                  </div>
                                  <a>EKSTRAKURIKULER</a>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Ekstrakurikuler yang diikuti</label>
                                        <a class="form-control">{{ $report->extracurricular }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Nilai Ekstrakurikuler</label>
                                        <a class="form-control">{{ $report->grade_of_extracurricular }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Keterangan Ekstrakurikuler</label>
                                        <a class="form-control">{{ $report->description }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <a>KETIDAKHADIRAN</a>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Sakit</label>
                                        <a class="form-control">{{ $report->sick }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Izin</label>
                                        <a class="form-control">{{ $report->permit }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Alpa</label>
                                        <a class="form-control">{{ $report->permit }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Catatan untuk Orang Tua</label>
                                        <a class="form-control">{{ $report->note_for_parents }}</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Tanggal Rapot</label>
                                        <a class="form-control">{{ $report->date_of_report }}</a>
                                      </div>
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