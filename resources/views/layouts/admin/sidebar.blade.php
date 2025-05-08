      <div class="sidebar" data-background-color="dark">
          <div class="sidebar-logo">
              <!-- Logo Header -->
              <div class="logo-header" data-background-color="dark">
                  <img src="{{ asset('admin/assets/img/download (6).jpeg') }}" style="width: 50px; border-radius:100%" alt="navbar brand"
                      class="navbar-brand" height="50" />
                  </a>
                  <div class="nav-toggle">
                      <button class="btn btn-toggle toggle-sidebar">
                          <i class="gg-menu-right"></i>
                      </button>
                      <button class="btn btn-toggle sidenav-toggler">
                          <i class="gg-menu-left"></i>
                      </button>
                  </div>
                  <button class="topbar-toggler more">
                      <i class="gg-more-vertical-alt"></i>
                  </button>
              </div>
              <!-- End Logo Header -->
          </div>
          <div class="sidebar-wrapper scrollbar scrollbar-inner">
              <div class="sidebar-content">
                  <ul class="nav nav-secondary">
                      <li class="nav-item active">
                          <a href="{{ route('home') }}" class="collapsed" aria-expanded="false">
                              <i class="fas fa-home"></i>
                              <p>Dashboard</p>
                          </a>
                      </li>
                      <li class="nav-section">
                          <span class="sidebar-mini-icon">
                              <i class="fa fa-ellipsis-h"></i>
                          </span>
                          <h4 class="text-section">Components</h4>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('artikel.index') }}">
                              <i class=""><i class="bi bi-journal-text"></i></i>
                              <p>Artikel</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('dosen.index') }}">
                              <i class=""><i class="bi bi-person-square"></i></i>
                              <p>Dosen</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('ukm.index') }}">
                              <i class=""><i class="bi bi-circle-fill"></i></i>
                              <p>Ukm</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('fakultas.index') }}">
                              <i class=""><i class="bi bi-circle-fill"></i></i>
                              <p>Fakultas</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('fasilitas.index') }}">
                              <i class=""><i class="bi bi-circle-fill"></i></i>
                              <p>Fasilitas</p>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
          <div class="main-header">
              <div class="main-header-logo">
                  <!-- Logo Header -->
                  <div class="logo-header" data-background-color="dark">
                      <a href="index.html" class="logo">
                          <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                              height="20" />
                      </a>
                      <div class="nav-toggle">
                          <button class="btn btn-toggle toggle-sidebar">
                              <i class="gg-menu-right"></i>
                          </button>
                          <button class="btn btn-toggle sidenav-toggler">
                              <i class="gg-menu-left"></i>
                          </button>
                      </div>
                      <button class="topbar-toggler more">
                          <i class="gg-more-vertical-alt"></i>
                      </button>
                  </div>
                  <!-- End Logo Header -->
              </div>
