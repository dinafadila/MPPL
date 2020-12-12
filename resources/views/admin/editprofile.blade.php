<?php $thisPage="students"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Edit Profil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('lte/lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
            <h1>Profil Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data Siswa</a></li>
              <li class="breadcrumb-item active">Profil Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
            <!-- 3 kolom -->
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ url('lte/lte/dist/img/user4-128x128.jpg') }}"
                        alt="User profile picture">
                  </div>

                    <h3 class="profile-username text-center">Intan Aida Rahmani</h3>

                    <p class="text-muted text-center">Kelas TK A</p>
                    
                    <a href="#" class="btn btn-primary btn-block"><b>Upload Foto Profil</b></a>
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>NIS</b> <a class="float-right">G64170091</a>
                      </li>
                      <li class="list-group-item">
                        <b>Kontak</b> <a class="float-right">088291268732</a>
                      </li>
                    </ul>
                </div>
              </div>
            </div>

            <!-- header content sebelah foto profil -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link" href="#report" data-toggle="tab">Rapot Anak</a></li>
                    <li class="nav-item"><a class="nav-link" href="#biodata" data-toggle="tab">Biodata</a></li>
                  </ul>
                </div>
            

                <!-- content sebelah foto profil -->
                <div class="card-body">
                  <div class="tab-content">

                    <!-- Rapot Anak -->
                    <div class="tab-pane" id="report">
                      <form role="form">

                          <a>A. BIDANG PENGEMBANGAN PEMBENTUKAN PERILAKU</a>
                          <!-- row 1 -->
                          <div class="form-group row">
                            <div class="col-8">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>1. Nilai-nilai Agama dan Moral</label>
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- row 2 -->
                          <div class="form-group row">
                            <div class="col-8">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>2. Sosial, Emosional dan Kemandirian</label>
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
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
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <!-- row 2 -->
                          <div class="form-group row">
                            <div class="col-8">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>2. Kognitif</label>
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- row 3 -->
                          <div class="form-group row">
                            <div class="col-8">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>3. Fisik</label>
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- row 4 -->
                          <div class="form-group row">
                            <div class="col-8">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>4. Seni</label>
                                  <textarea class="form-control" rows="4" placeholder="Keterangan"></textarea>
                                </div>
                            </div>
                            <div class="col-4">
                              <label for="exampleInputFile"><br>Dokumentasi Kegiatan</label>
                              <div class="input-group">
                                <div class="custom-file">
                                <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="true">
                                </div>
                              </div>
                            </div>
                          </div>

                          
                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>  
                    </div>
                    <!-- stop setting -->
                    
                    <!-- Edit Biodata -->
                    <div class="tab-pane" id="biodata">
                      <form role="form">
                          
                          <!-- row 0 -->
                          <div class="form-group row">
                            <div class="col-6">
                              <label for="">Nomer Induk Siswa</label>
                              <input type="" class="form-control" id="" placeholder="Nomer Induk Siswa">
                            </div>
                            <div class="col-6">
                              <label for="">Tanggal Masuk</label>
                              <input type="" class="form-control" id="" placeholder="Tanggal Masuk">
                            </div>
                          </div>

                          <!-- row 1 -->
                          <div class="form-group row">
                            <div class="col-6">
                              <label for="">Nama Siswa/i</label>
                              <input type="" class="form-control" id="" placeholder="Isi Nama Siswa/i">
                            </div>
                            <div class="col-6">
                              <label for="exampleInputEmail1">Alamat Email Orang Tua</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Isi Alamat Email Orang Tua">
                            </div>
                          </div>

                          <!-- row 2 -->
                          <div class="form-group row">
                            <div class="col-6">
                                <label>Jenis Kelamin</label>
                                <select class="form-control">
                                  <option>Perempuan</option>
                                  <option>Laki-laki</option>
                                </select>
                            </div>
                            <div class="col-6">
                              <label>Tanggal Lahir</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>      
                              </div>
                            </div>
                          </div>
                            
                            <!-- row 3 -->
                          <div class="form-group row">
                            <div class="col-6">
                              <label for="">Agama</label>
                              <input type="" class="form-control" id="" placeholder="Isi Agama">
                            </div>
                            <div class="col-6">
                              <label for="">Kontak / No. Handphone Orang Tua</label>
                              <input type="" class="form-control" id="" placeholder="Isi Kontak / No. Handphone Orang Tua">
                            </div>               
                          </div>

                            <!-- row 4 -->
                          <div class="form-group row">
                            <div class="col-6">
                              <label for="">Nama Ayah</label>
                              <input type="" class="form-control" id="" placeholder="Isi Nama Ayah">
                            </div>  
                            <div class="col-6">
                              <label for="">Nama Ibu</label>
                              <input type="" class="form-control" id="" placeholder="Isi Nama Ibu">
                            </div>                
                          </div>

                            <!-- row 5 -->
                          <div class="form-group row">
                            <div class="col-12">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>Alamat Rumah</label>
                                  <textarea class="form-control" rows="3" placeholder="Isi Alamat Rumah"></textarea>
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
