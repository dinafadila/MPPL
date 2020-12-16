@extends('layouts.app', ['activePage' => 'biodata', 'titlePage' => __('Biodata Anak')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">{{ __('Profil Siswa') }}</h4>
                        <!-- <p class="card-category">{{ __('User information') }}</p> !-->
                    </div>
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="name" id="input-name" type="text">{{ $student->name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Jenis Kelamin') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="gender" id="input-gender" type="text">{{ $student->gender }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tempat Lahir') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="place_of_birth" id="input-place_of_birth" type="text">{{ $student->place_of_birth }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="date_of_birth" id="input-date_of_birth" type="text">{{ $student->date_of_birth }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Agama') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="religion" id="input-religion" type="text">{{ $student->religion }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tanggal Masuk') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="date_of_entry" id="input-date_of_entry" type="text">{{ $student->date_of_entry }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="address" id="input-address" type="text">{{ $student->address }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('No. Telepon') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="phone" id="input-phone" type="text">{{ $student->phone }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Ayah') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="father_name" id="input-father_name" type="text">{{ $student->father_name }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nama Ibu') }}</label>
                            <div class="col-sm-7">
                                <p class="form-control" name="mother_name" id="input-mother_name" type="text">{{ $student->mother_name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection