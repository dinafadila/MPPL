@extends('layouts.app', ['activePage' => 'report', 'titlePage' => __('Rapot Anak')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header card-header-success">
          <h4 class="card-title">Rapot Anak</h4>
          <p class="card-category">Kelas {{ $report->group }}</p>
          <p class="card-category">Semester {{ $report->semester }}</p>
          <p class="card-category">{{ $report->school_year }}</p>
        </div>
        <br>
        <!-- NAVBAR UNTUK BIDANG PENGEMBANGAN (masih coba)
        <nav>
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
        </div>
        !-->
        <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <th>
                      A. BIDANG PENGEMBANGAN PEMBENTUKAN PERILAKU 
                    </th>
                  </tr>
                  <tr>
                    <td>
                      1. Nilai-nilai Agama dan Moral
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->religion_and_moral }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2. Sosial, Emosional dan Kemandirian
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->social_emotional_and_autonomy }}</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <th>
                      B. BIDANG PENGEMBANGAN KEMAMPUAN DASAR
                    </th>
                  </tr>
                  <tr>
                    <td>
                      1. Bahasa
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->language }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      2. Kognitif
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->cognitive }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      3. Fisik
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->physical }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      4. Seni
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->art }}</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <th>
                      EKSTRAKURIKULER
                    </th>
                  </tr>
                  <tr>
                    <td>
                      {{ $report->extracurricular }}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Nilai {{ $report->extracurricular }}</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->grade_of_extracurricular }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Keterangan {{ $report->extracurricular }}</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->description }}</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <th>
                      KETIDAKHADIRAN
                    </th>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Sakit</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->sick }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Izin</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->permit }}</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tanpa Keterangan</label>
                        <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->absent }}</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Catatan untuk Orang Tua</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->note_for_parents }}</p>
                    </div>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead class=" text-success">
                <tbody>
                  <tr>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Tanggal Rapot</label>
                      <p class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $report->date_of_report }}</p>
                    </div>
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