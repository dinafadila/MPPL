<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Edit Profile</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('lte/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('lte/lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('admin/header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Profil Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
              <li class="breadcrumb-item active">Ubah Profil Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profil Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                  <!-- row 1 -->
                  <div class="row">
                    <div class="col-6">
                      <label for="">Nama Siswa/i</label>
                      <input type="" class="form-control" id="" placeholder="Isi Nama Siswa/i">
                    </div>
                    <div class="col-6">
                      <label for="exampleInputEmail1">Alamat email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Isi Alamat Email">
                    </div>
                  </div>

                  <!-- row 2 -->
                  <div class="row">
                  <div class="col-6">
                      <label><br>Jenis Kelamin</label>
                      <select class="form-control">
                        <option>Perempuan</option>
                        <option>Laki-laki</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <label><br> Tanggal Lahir</label>
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- row 3 -->
                  <div class="row">
                    <div class="col-6">
                      <label for=""><br>Agama</label>
                      <input type="" class="form-control" id="" placeholder="Isi Agama">
                    </div>
                    <div class="col-6">
                      <label for=""><br>Alamat Rumah</label>
                      <input type="" class="form-control" id="" placeholder="Isi Alamat Rumah">
                    </div>               
                  </div>

                  <!-- row 4 -->
                  <div class="row">
                    <div class="col-6">
                      <label for=""><br>Nama Ayah</label>
                      <input type="" class="form-control" id="" placeholder="Isi Nama Ayah">
                    </div>  
                    <div class="col-6">
                      <label for=""><br>Nama Ibu</label>
                      <input type="" class="form-control" id="" placeholder="Isi Nama Ibu">
                    </div>                
                  </div>

                  <!-- row 5 -->
                  <div class="row">
                    <div class="col-12">
                        <!-- textarea -->
                        <div class="form-group">
                          <label><br>Alamat Rumah</label>
                          <textarea class="form-control" rows="3" placeholder="Isi Alamat Rumah"></textarea>
                        </div>
                    </div>    
                  </div>
                </div>
                <!-- /.card-body -->


                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                   
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

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
