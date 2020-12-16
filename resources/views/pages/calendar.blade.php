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
                  @php
                    $idx = 1;
                  @endphp
                  @foreach ($calendars as $calendar) 
                  <tr>
                    <td>
                      {{ $idx++ }}
                    </td>
                    <td>
                      {{ $calendar->name_of_event }}
                    </td>
                    <td>
                      {{ $calendar->start_date }}
                    </td>
                    <td>
                      {{ $calendar->end_date }}
                    </td>
                  </tr>
                  @endforeach
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
