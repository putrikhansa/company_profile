  <!-- Sidebar -->
  <div class="sidebar sidebar-style-2 "data-background-color="white">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
              <ul class="nav nav-primary">
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
                  <li class="nav-item active">
                      <a href="{{ route('artikel.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-journal-text"></i>
                          <p>Artikel</p>
                      </a>
                  </li>
                  <li class="nav-item active">
                      <a href="{{ route('dosen.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-person-rolodex"></i>
                          <p>Dosen</p>
                      </a>
                  </li>
                  <li class="nav-item active">
                      <a href="{{ route('fakultas.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-buildings"></i>
                          <p>Fakultas</p>
                      </a>
                  </li>
                  <li class="nav-item active">
                      <a href="{{ route('fasilitas.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-building"></i>
                          <p>Fasilitas</p>
                      </a>
                  </li>
                   <li class="nav-item active">
                      <a href="{{ route('fotofasilitas.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-building"></i>
                          <p>Foto Fasilitas</p>
                      </a>
                  </li>
                  <li class="nav-item active">
                      <a href="{{ route('ukm.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-card-heading"></i>
                          <p>Ukm</p>
                      </a>
                  </li>
                  <li class="nav-item active">
                      <a href="{{ route('prestasi.index') }}" class="collapsed" aria-expanded="false">
                          <i class="bi bi-award-fill"></i>
                          <p>Prestasi</p>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- End Sidebar -->
