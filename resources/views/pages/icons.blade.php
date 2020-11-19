@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Rapot Anak')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header card-header-success">
          <h4 class="card-title">Rapot Anak</h4>
          <p class="card-category">Semester Ganjil</p>
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
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
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <p>Upload Dokumentasi Kegiatan</p>
                      <input id="input-b2" name="input-b2" type="file" class="file" data-show-preview="false">
                    </td>
                  </tr>
                </tbody>
              </table>
              
              <div class = "text-right">
                <button type="update" class="btn btn-warning">{{ __('Update') }}</button>
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection