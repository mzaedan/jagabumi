<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('backend/dist/img/user-photo.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>    
        <div class="info">
            <a href="#" class="d-block">
              Admin
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href={{ route('dashboard') }} class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
              </a>
          </li>
        </ul>
    </nav>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href={{ route('project.index') }} class="nav-link">
                  <i class="nav-icon fas fa-project-diagram"></i>
                    <p>
                        Project
                    </p>
              </a>
          </li>
        </ul>
    </nav>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href={{ route('berita.index') }} class="nav-link">
                  <i class="nav-icon fas fa-newspaper"></i>
                    <p>
                        Berita
                    </p>
              </a>
          </li>
        </ul>
    </nav>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href={{ route('kontak.index') }} class="nav-link">
                  <i class="nav-icon fas fa-envelope-square"></i>
                    <p>
                        Pesan
                    </p>
              </a>
          </li>
        </ul>
    </nav>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href={{ route('logout') }} class="nav-link">
                  <i class="nav-icon  fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
              </a>
          </li>
        </ul>
    </nav>
</div>