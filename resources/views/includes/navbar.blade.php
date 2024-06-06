<header>
    <!-- Navigation Bar-->
    <nav>
      <div class="header-logo">
        <a href="{{ route('beranda') }}">
          <img
            src="{{ url('images/logo.png') }}"
            alt="Logo"
            class="logo"
            width="120px"
          />
        </a>
      </div>
      <ul class="nav-header">
        <li class="nav-item {{ request()->routeIs('user.beranda.index') ? 'active' : '' }}"><a href="{{ route('user.beranda.index') }}">Beranda</a></li>
        <li class="nav-item {{ request()->routeIs('user.project.index') ? 'active' : '' }}"><a href="{{ route('user.project.index') }}">Project</a></li>
        <li class="nav-item {{ request()->routeIs('user.berita.index') ? 'active' : '' }}"><a href="{{ route('user.berita.index') }}">Berita</a></li>
        <li class="nav-item {{ request()->routeIs('kontak') ? 'active' : '' }}"><a href="{{ route('kontak') }}">Kontak</a></li>
      </ul>
      <a href="" class="nav-header-responsive">&#9776;</a>
    </nav>
</header>