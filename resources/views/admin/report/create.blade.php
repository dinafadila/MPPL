<?php $thisPage="reports"; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Admin | Tambah Rapot Siswa/i</title>
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
                    <h1 class="m-0 text-dark">Tambah Rapot Siswa/i</h1>
                </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                    <li class="breadcrumb-item active">Tambah Rapot Siswa/i</li>
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
                                <form role="form" action="{{ route('report.store') }}" method="POST">
                                  @csrf
                                  <div class="form-group row">
                                    <div class="col-6">
                                        <label>StudentID</label>
                                        <input type="text" class="form-control" name="student_id" id="student_id" placeholder="Student ID">
                                    </div>
                                    <div class="col-6">
                                        <label>Kelas</label>
                                        <input type="text" class="form-control" name="group" id="group" placeholder="Contoh : A (satu huruf saja)">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-6">
                                        <label>Semester</label>
                                        <input type="text" class="form-control" name="semester" id="semester" placeholder="Contoh : 1 (satu angka saja)">
                                    </div>
                                    <div class="col-6">
                                        <label>Tahun Pelajaran</label>
                                        <input type="text" class="form-control" name="school_year" id="school_year" placeholder="Contoh : 2020/2021">
                                    </div>
                                  </div>
                                  <a>A. BIDANG PENGEMBANGAN PEMBENTUKAN PERILAKU</a>
                                  <!-- row 1 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>1. Nilai-nilai Agama dan Moral</label>
                                        <textarea class="form-control" rows="4" name="religion_and_moral" placeholder="Keterangan"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 2 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>2. Sosial, Emosional dan Kemandirian</label>
                                        <textarea class="form-control" rows="4" name="social_emotional_and_autonomy" placeholder="Keterangan"></textarea>
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
                                        <textarea class="form-control" rows="4" name="language" placeholder="Keterangan"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 2 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>2. Kognitif</label>
                                        <textarea class="form-control" rows="4" name="cognitive" placeholder="Keterangan"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- row 3 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                        <!-- textarea -->
                                        <div class="form-group">
                                          <label>3. Fisik</label>
                                          <textarea class="form-control" rows="4" name="physical" placeholder="Keterangan"></textarea>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- row 4 -->
                                  <div class="form-group row">
                                    <div class="col-8">
                                        <!-- textarea -->
                                        <div class="form-group">
                                          <label>4. Seni</label>
                                          <textarea class="form-control" rows="4" name="art" placeholder="Keterangan"></textarea>
                                        </div>
                                    </div>
                                  </div>
                                  <a>EKSTRAKURIKULER</a>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Ekstrakurikuler yang diikuti</label>
                                        <textarea class="form-control" rows="4" name="extracurricular" placeholder="Ekstrakurikuler yang diikuti"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Nilai Ekstrakurikuler</label>
                                        <input type="alphabet" class="form-control" rows="4" name="grade_of_extracurricular" placeholder="Contoh : A (satu huruf saja)">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Keterangan Ekstrakurikuler</label>
                                        <textarea class="form-control" rows="4" name="description" placeholder="Keterangan"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <a>KETIDAKHADIRAN</a>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Sakit</label>
                                        <input type="number" class="form-control" rows="4" name="sick" placeholder="Contoh : 1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Izin</label>
                                        <input type="number" class="form-control" rows="4" name="permit" placeholder="Contoh : 1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Alpa</label>
                                        <input type="number" class="form-control" rows="4" name="absent" placeholder="Contoh : 1">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Catatan untuk Orang Tua</label>
                                        <textarea class="form-control" rows="4" name="note_for_parents" placeholder="Catatan untuk Orang Tua"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-8">
                                      <!-- textarea -->
                                      <div class="form-group">
                                        <label>Tanggal Rapot</label>
                                        <input type="date" class="form-control" rows="4" name="date_of_report" placeholder="Tanggal Rapot">
                                      </div>
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