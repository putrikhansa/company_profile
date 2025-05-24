        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow w-100">
                <a href="" class="navbar-brand p-0">
                    <img src="{{ asset('frontend\img\Cuplikan_layar_2025-05-19_141931-removebg-preview.png') }}"
                        alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto">
                        <a href="/" class="nav-item nav-link ">Beranda</a>
                        {{-- <a href="tentang" class="nav-item nav-link">Tentang</a> --}}
                        <a href="fakultas" class="nav-item nav-link">Fakultas</a>
                        <a href="fasilitas" class="nav-item nav-link">Fasilitas</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <a href="ukm" class="dropdown-toggle">Ukm</a>
                            </a>
                            <div class="dropdown-menu">
                                <a href="prestasi" class="dropdown-item">Prestasi</a>
                                <a href="dosen" class="dropdown-item">Dosen</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END nav -->
