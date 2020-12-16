@extends('layouts.app', ['activePage' => 'calendar', 'titlePage' => __('Kalender Akademik')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Kalender Akademik</h4>
            <p class="card-category">Semester Ganjil</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th style="width: 1%">
                    No
                  </th>
                  <th>
                    Nama Kegiatan
                  </th>
                  <th>
                    Tanggal mulai
                  </th>
                  <th>
                    Tanggal berakhir
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td>
                      Hari Libur Nasional
                    </td>
                    <td>
                      10-07-2020
                    </td>
                    <td>
                      13-07-2020
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
</div>
@endsection
