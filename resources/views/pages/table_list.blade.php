@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('SPP')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Rekapitulasi SPP</h4>
            <p class="card-category">Semester Ganjil</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Bulan
                  </th>
                  <th>
                    Tanggal
                  </th>
                  <th>
                    SPP
                  </th>
                  <th>
                    Uang Pangkal
                  </th>
                  <th>
                    Keterangan
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Juli
                    </td>
                    <td>
                      10-07-2020
                    </td>
                    <td>
                      Rp120.000 
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                      LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Agustus
                    </td>
                    <td>
                      10-08-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      September
                    </td>
                    <td>
                    10-09-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Oktober
                    </td>
                    <td>
                    10-10-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                    Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      November
                    </td>
                    <td>
                    10-11-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                    Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Desember
                    </td>
                    <td>
                      
                    </td>
                    <td>
                    
                    </td>
                    <td>
                      
                    </td>
                    <td class="text-primary">
                    BELUM LUNAS
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Rekapitulasi SPP</h4>
            <p class="card-category">Semester Genap</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Bulan
                  </th>
                  <th>
                    Tanggal
                  </th>
                  <th>
                    SPP
                  </th>
                  <th>
                    Uang Pangkal
                  </th>
                  <th>
                    Keterangan
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      Januari
                    </td>
                    <td>
                      10-01-2020
                    </td>
                    <td>
                      Rp120.000 
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                      LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Februari
                    </td>
                    <td>
                      10-02-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Maret
                    </td>
                    <td>
                    10-03-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                      Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      April
                    </td>
                    <td>
                    10-04-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                    Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Mei
                    </td>
                    <td>
                    10-05-2020
                    </td>
                    <td>
                      Rp120.000
                    </td>
                    <td>
                    Rp100.000
                    </td>
                    <td class="text-primary">
                    LUNAS
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Juni
                    </td>
                    <td>
                      
                    </td>
                    <td>
                    
                    </td>
                    <td>
                      
                    </td>
                    <td class="text-primary">
                    BELUM LUNAS
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection