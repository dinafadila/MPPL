@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Biodata Anak')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.update') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">{{ __('Profil Siswa') }}</h4>
                <!-- <p class="card-category">{{ __('User information') }}</p> !-->
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', auth()->user()->name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="input-email" type="email" placeholder="{{ __('Email') }}" value="{{ old('email', auth()->user()->email) }}" required />
                      @if ($errors->has('email'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Jenis Kelamin') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('gender') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" id="input-gender" type="text" placeholder="{{ __('Jenis Kelamin') }}" value="{{ old('gender', auth()->user()->gender) }}" required="true" aria-required="true"/>
                      @if ($errors->has('gender'))
                        <span id="gender-error" class="error text-danger" for="input-gender">{{ $errors->first('gender') }}</span>
                      @endif
                    </div>
                  </div> 
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Tanggal Lahir') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('date_of_birth') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('date_of_birth') ? ' is-invalid' : '' }}" name="date_of_birth" id="input-date_of_birth" type="text" placeholder="{{ __('Tanggal Lahir') }}" value="{{ old('date_of_birth', auth()->user()->date_of_birth) }}" required="true" aria-required="true"/>
                      @if ($errors->has('date_of_birth'))
                        <span id="date_of_birth-error" class="error text-danger" for="input-date_of_birth">{{ $errors->first('date_of_birth') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Agama') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('religion') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('religion') ? ' is-invalid' : '' }}" name="religion" id="input-religion" type="text" placeholder="{{ __('Agama') }}" value="{{ old('religion', auth()->user()->region) }}" required="true" aria-required="true"/>
                      @if ($errors->has('religion'))
                        <span id="religion-error" class="error text-danger" for="input-religion">{{ $errors->first('religion') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('address') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" id="input-address" type="text" placeholder="{{ __('Alamat') }}" value="{{ old('address', auth()->user()->address) }}" required="true" aria-required="true"/>
                      @if ($errors->has('address'))
                        <span id="address-error" class="error text-danger" for="input-address">{{ $errors->first('address') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('No. HP') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="input-phone" type="text" placeholder="{{ __('No. HP') }}" value="{{ old('phone', auth()->user()->phone) }}" required="true" aria-required="true"/>
                      @if ($errors->has('phone'))
                        <span id="phone-error" class="error text-danger" for="input-phone">{{ $errors->first('phone') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama Ayah') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('father_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('father_name') ? ' is-invalid' : '' }}" name="father_name" id="input-father_name" type="text" placeholder="{{ __('Nama Ayah') }}" value="{{ old('father_name', auth()->user()->father_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('father_name'))
                        <span id="father_name-error" class="error text-danger" for="input-father_name">{{ $errors->first('father_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nama Ibu') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mother_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mother_name') ? ' is-invalid' : '' }}" name="mother_name" id="input-mother_name" type="text" placeholder="{{ __('Nama Ibu') }}" value="{{ old('mother_name', auth()->user()->mother_name) }}" required="true" aria-required="true"/>
                      @if ($errors->has('mother_name'))
                        <span id="mother_name-error" class="error text-danger" for="input-mother_name">{{ $errors->first('mother_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('profile.password') }}" class="form-horizontal">
            @csrf
            @method('put')

            <div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">{{ __('Ubah password') }}</h4>
                <p class="card-category">{{ __('Password') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status_password'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status_password') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-current-password">{{ __('Password Sebelumnya') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('old_password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" input type="password" name="old_password" id="input-current-password" placeholder="{{ __('Password Sebelumnya') }}" value="" required />
                      @if ($errors->has('old_password'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('old_password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password">{{ __('Password Baru') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="input-password" type="password" placeholder="{{ __('Password Baru') }}" value="" required />
                      @if ($errors->has('password'))
                        <span id="password-error" class="error text-danger" for="input-password">{{ $errors->first('password') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="input-password-confirmation">{{ __('Konfirmasi Password Baru') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="password_confirmation" id="input-password-confirmation" type="password" placeholder="{{ __('Konfirmasi Password Baru') }}" value="" required />
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">{{ __('Ubah password') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection