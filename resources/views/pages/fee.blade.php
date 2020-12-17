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
                    Jul
                  </th>
                  <th>
                    Agu
                  </th>
                  <th>
                    Sep
                  </th>
                  <th>
                    Okt
                  </th>
                  <th>
                    Nov
                  </th>
                  <th>
                    Des
                  </th>
                  <th>
                    Jan
                  </th>
                  <th>
                    Feb
                  </th>
                  <th>
                    Mar
                  </th>
                  <th>
                    Apr
                  </th>
                  <th>
                    Mei
                  </th>
                  <th>
                    Jun
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      {{ $fee->july }}
                    </td>
                    <td>
                      {{ $fee->august }}
                    </td>
                    <td>
                      {{ $fee->september }}
                    </td>
                    <td>
                      {{ $fee->october }}
                    </td>
                    <td>
                      {{ $fee->november }}
                    </td>
                    <td>
                      {{ $fee->december }}
                    </td>
                    <td>
                      {{ $fee->january }}
                    </td>
                    <td>
                      {{ $fee->february }}
                    </td>
                    <td>
                      {{ $fee->march }}
                    </td>
                    <td>
                      {{ $fee->april }}
                    </td>
                    <td>
                      {{ $fee->may }}
                    </td>
                    <td>
                      {{ $fee->june }}
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