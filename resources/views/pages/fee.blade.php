@extends('layouts.app', ['activePage' => 'fee', 'titlePage' => __('SPP')])

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
        <div class="card card-plain">
          <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"> Table on Plain Background</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="">
                  <th>
                    ID
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Country
                  </th>
                  <th>
                    City
                  </th>
                  <th>
                    Salary
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Dakota Rice
                    </td>
                    <td>
                      Niger
                    </td>
                    <td>
                      Oud-Turnhout
                    </td>
                    <td>
                      $36,738
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td>
                      Minerva Hooper
                    </td>
                    <td>
                      Curaçao
                    </td>
                    <td>
                      Sinaai-Waas
                    </td>
                    <td>
                      $23,789
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td>
                      Sage Rodriguez
                    </td>
                    <td>
                      Netherlands
                    </td>
                    <td>
                      Baileux
                    </td>
                    <td>
                      $56,142
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td>
                      Philip Chaney
                    </td>
                    <td>
                      Korea, South
                    </td>
                    <td>
                      Overland Park
                    </td>
                    <td>
                      $38,735
                    </td>
                  </tr>
                  <tr>
                    <td>
                      5
                    </td>
                    <td>
                      Doris Greene
                    </td>
                    <td>
                      Malawi
                    </td>
                    <td>
                      Feldkirchen in Kärnten
                    </td>
                    <td>
                      $63,542
                    </td>
                  </tr>
                  <tr>
                    <td>
                      6
                    </td>
                    <td>
                      Mason Porter
                    </td>
                    <td>
                      Chile
                    </td>
                    <td>
                      Gloucester
                    </td>
                    <td>
                      $78,615
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