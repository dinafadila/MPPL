<?php $thisPage="sppadmin"; ?>
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
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('lte/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('lte/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('lte/lte/dist/css/adminlte.min.css') }}">
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
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              <div class="card-header">
                <h3 class="card-title">Data SPP Semester Ganjil</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Juli</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Agustus: activate to sort column ascending">Agustus</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="September: activate to sort column ascending">September</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Oktober: activate to sort column ascending" >Oktober</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="September: activate to sort column ascending">November</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Oktober: activate to sort column ascending" >Desember</th>
                  <th style="width: 15%"> Pengaturan </th>
                </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr></tbody>
                  
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
            <!-- /.card -->
          </div>
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data SPP Semester Genap</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline collapsed" role="grid" aria-describedby="example2_info">
                  <thead>
                  <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Nama: activate to sort column ascending">Januari</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Agustus: activate to sort column ascending">Februari</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="September: activate to sort column ascending">Maret</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Oktober: activate to sort column ascending" >April</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="September: activate to sort column ascending">Mei</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Oktober: activate to sort column ascending" >Juni</th>
                  <th style="width: 15%"> Pengaturan </th>
                </tr>
                  </thead>
                  <tbody>
                  <tr role="row" class="odd">
                    <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="even">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr><tr role="row" class="odd">
                  <td tabindex="0" class="sorting_1">Fulan</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td>100.000</td>
                    <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ route('editspp') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                    <td style="display: none;">A</td>
                  </tr></tbody>
                  
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>
              <!-- /.card-body -->
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
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
<script src="{{ url('lte/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('lte/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{ url('lte/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('lte/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('lte/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('lte/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('lte/lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('lte/lte/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
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
