<div class="sidebar" data-color="green" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
      <img style="width:50px" src="{{ asset('material') }}/img/logo_tk.png">
      {{ __('TK Islam Raihan') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Beranda') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
          </ul>
        </div>
      </li> !-->
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">account_circle</i>
            <p>{{ __('Profile') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'biodata' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('biodata') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Biodata Anak') }}</p>
        </a>
      </li>   
      <!-- <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
          <a class="nav-link" href="{{ route('user.index') }}">
              <span class="sidebar-mini"> UM </span>
              <span class="sidebar-normal"> {{ __('User Management') }} </span>
          </a>
      </li> !-->
      <li class="nav-item{{ $activePage == 'report' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('report') }}">
          <i class="material-icons">bubble_chart</i>
            <p>{{ __('Rapot Anak') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'calendar' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('calendar') }}">
          <i class="material-icons">notifications</i>
            <p>{{ __('Kalender Akademik') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'fee' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('fee') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('SPP') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
