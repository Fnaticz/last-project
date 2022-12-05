<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <div class="logo">
    <a href="https://google.com/" class="simple-text logo-normal">
      {{ __('Corner') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <p>{{ __('Drop Content') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/post') }}">
                <span class="sidebar-mini"> LP </span>
                <span class="sidebar-normal">{{ __('Lapangan') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('post/create') }}">
                <span class="sidebar-mini"> TL </span>
                <span class="sidebar-normal">{{ __('Tambah Lapangan') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('booking') }}">
                <span class="sidebar-mini"> BK </span>
                <span class="sidebar-normal">{{ __('Bookings') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('tournament') }}">
                <span class="sidebar-mini"> TL</span>
                <span class="sidebar-normal">{{ __('Tournament Live') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('tournament/create') }}">
                <span class="sidebar-mini"> BT </span>
                <span class="sidebar-normal"> {{ __('Buat Tournament') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notif') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('Support') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
