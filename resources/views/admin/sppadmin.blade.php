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
          <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Data SPP Semester Ganjil</h3>
          <div class="card-body">
            <div id="table" class="table-editable">
              <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center">Juli</th>
                    <th class="text-center">Agustus</th>
                    <th class="text-center">September</th>
                    <th class="text-center">Oktober</th>
                    <th class="text-center">November</th>
                    <th class="text-center">Desember</th>
                    <th class="text-center">Sort</th>
                    <th class="text-center">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr class="hide">
                    <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </table>
              </div>
            </div>

            <div class="card">
          <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Data SPP Semester Genap</h3>
          <div class="card-body">
            <div id="table" class="table-editable">
              <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center">Januari</th>
                    <th class="text-center">Februari</th>
                    <th class="text-center">Maret</th>
                    <th class="text-center">April</th>
                    <th class="text-center">Mei</th>
                    <th class="text-center">Juni</th>
                    <th class="text-center">Sort</th>
                    <th class="text-center">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Aurelia Vega</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Guerra Cortez</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr>
                    <td class="pt-3-half" contenteditable="true">Guadalupe House</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <!-- This is our clonable table line -->
                  <tr class="hide">
                    <td class="pt-3-half" contenteditable="true">Elisa Gallagher</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half" contenteditable="true">100.000</td>
                    <td class="pt-3-half">
                      <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                            aria-hidden="true"></i></a></span>
                      <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                            aria-hidden="true"></i></a></span>
                    </td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                </tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </table>
              </div>
            </div>
      </div>
    </div>
</div>


          
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
