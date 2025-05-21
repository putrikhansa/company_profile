@extends('layouts.frontend')
@section('content')
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel">
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Excellence WIth Morality</h4>
                                <h1 class="display-1 text-white mb-4">Universitas Gadjah Mada</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy...
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                        href="https://www.youtube.com/@UGM.Yogyakarta?app=desktop"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 animated fadeInRight">
                            <div class="calrousel-img" style="object-fit: cover;">
                                <img src="{{ asset('frontend\img\buat_adrepan___-removebg-preview.png') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item bg-primary">
            <div class="carousel-caption">
                <div class="container">
                    <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                        <div class="col-lg-5 animated fadeInLeft">
                            <div class="calrousel-img">
                                <img src="{{ asset('frontend\img\buat_adrepan___-removebg-preview.png') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7 animated fadeInRight">
                            <div class="text-sm-center text-md-end">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Excellence WIth Morality</h4>
                                <h1 class="display-1 text-white mb-4">Universitas Gadjah Mada</h1>
                                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy...
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                    <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2"
                                        href="https://www.youtube.com/@UGM.Yogyakarta?app=desktop"><i
                                            class="fas fa-play-circle me-2"></i> Watch Video</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4">Berita Terkini</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($artikel as $data)
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ asset('/storage/artikel/' . $data->foto) }}" alt=""
                                    class="img-fluid rounded-top w-100">
                                <div class="blog-categiry py-2 px-4">
                                    <span>Berita</span>
                                </div>
                            </div>
                            <div class="blog-content p-4">
                                <a href="#"
                                    class="h4 d-inline-block mb-3">{{ Str::limit(strip_tags($data->judul), 90) }}</a>
                                <p class="mb-3">{{ Str::limit(strip_tags($data->isi), 90) }}</p>
                                <a href="{{ url('detail', $data->id) }}" class="btn p-0"> Baca Selengkapnya <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->




    <!-- About Start -->
    <div class="container-fluid bg-light about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5 h-100">
                        <h4 class="text-primary">Tentang UGM</h4>

                        <p>Universitas Gadjah Mada lahir dari kancah perjuangan revolusi kemerdekaan bangsa Indonesia.
                            Didirikan pada periode awal kemerdekaan, UGM didaulat sebagai Balai Nasional Ilmu Pengetahuan
                            dan Kebudayaan bagi penyelenggaraan pendidikan tinggi nasional.

                            Berdiri dengan nama “Universitas Negeri Gadjah Mada”, perguruan tinggi ini merupakan gabungan
                            dari beberapa sekolah tinggi yang telah lebih dulu didirikan, di antaranya Balai Perguruan
                            Tinggi Gadjah Mada, Sekolah Tinggi Teknik, dan Akademi Ilmu Politik yang terletak di Yogyakarta,
                            Balai Pendidikan Ahli Hukum di Solo, serta Perguruan Tinggi Kedokteran Bagian Praklinis di
                            Klaten, yang disahkan dengan Peraturan Pemerintah No. 23 Tahun 1949 tentang Peraturan
                            Penggabungan Perguruan Tinggi menjadi Universiteit.

                            Nama Gadjah Mada juga memiliki makna tersendiri, mengandung semangat serta teladan Mahapatih
                            Gadjah Mada yang berhasil mempersatukan nusantara. Teladan ini diterjemahkan ke dalam rumusan
                            jati diri UGM sebagai universitas nasional, universitas perjuangan, universitas Pancasila,
                            universitas kerakyatan dan universitas pusat kebudayaan,
                            Pada awal pendiriannya, UGM memiliki 6 fakultas, yaitu Fakultas Kedokteran, Fakultas Hukum,
                            Fakultas Teknik, Fakultas Sastra dan Filsafat, Fakultas Pertanian, Fakultas Kedokteran Hewan.
                            Kegiatan perkuliahan masa itu dilakukan di Sitinggil dan Pagelaran, dengan memanfaatkan
                            ruangan-ruangan kamar dan fasilitas di lingkungan Kraton Yogyakarta.</p>
                        {{-- <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Information</a> --}}
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-5 h-100">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="{{ asset('frontend\img\UGM.jpeg') }}" class="img-fluid rounded w-100"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4">Fakultas</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($fakultas as $data)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset('storage/fakultas/' . $data->foto) }}" alt=""
                                    class="img-fluid rounded-top w-100">
                                <div class="service-icon p-3">
                                    <i class="fa fa-building fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4">{{ $data->nama_fakultas }}</a>
                                    <p class="mb-4">{{ $data->deskripsi }}</p>
                                    {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- FAQs Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <div class="mb-5">

                            <h1 class="display-4 mb-0">VISI & MISI</h1>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button border-0" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Visi
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body rounded">
                                        Universitas Gadjah Mada sebagai pelopor perguruan tinggi nasional berkelas dunia
                                        yang unggul dan inovatif, mengabdi kepada kepentingan bangsa dan kemanusiaan dijiwai
                                        nilai-nilai budaya bangsa berdasarkan Pancasila. </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Misi
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Menjalankan pendidikan, penelitian, dan pengabdian kepada masyarakat serta
                                        pelestarian dan pengembangan ilmu yang unggul dan bermanfaat bagi masyarakat </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <img src="{{ asset('frontend\img\universitas gadjah mada at night.jpeg') }}" class="img-fluid w-100"
                        alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->



    <!-- Team Start -->
    <div class="container-fluid team pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4">Dosen</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row d-flex">
                @foreach ($dosen as $data)
                    <div class="col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt=""
                                    class="rounded-top w-100">
                                <div class="team-icon">
                                    <a class="btn btn-primary" href="#">{{ $data->status }}</a>
                                    <a class="btn btn-primary mt-1" href="#">{{ $data->telepon }}</a>
                                    <a class="btn btn-primary mt-1" href="#">{{ $data->email }}</a>
                                </div>
                            </div>
                            <div class="team-title p-3">
                                <h4 class="mb-0">{{ $data->nama_dosen }}</h4>
                                <p class="mb-0">{{ $data->jabatan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Feature Start -->
    <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h1 class="display-4 mb-4">Prestasi</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                @foreach ($prestasi as $data)
                    <div class="col-md-6 col-lg-6 col-xl-3 d-flex">
                        <div class="feature-item p-4 pt-0 w-100">
                            <div class="feature-icon text-center">
                                <img src="{{ asset('storage/prestasi/' . $data->foto) }}" alt="" width="100"
                                    class="mt-2 mb-3 rounded">
                            </div>
                            <div class="flex-grow-2">
                                <h4 class="mb-3">{{ $data->nama_prestasi }}</h4>
                                <p>{{ $data->deskripsi }}</p>
                            </div>
                            {{-- <a class="btn btn-primary rounded-pill py-2 px-4 mt-auto" href="#">Learn More</a> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Testimonial Start -->
   <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 mb-4">What Our Customers Are Saying</h1>
                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                        cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                        dolorem autem obcaecati, ipsam mollitia hic.
                    </p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('frontend/img/testimonial-1.jpg') }}" class="img-fluid h-100 rounded"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                        molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('frontend/img/testimonial-2.jpg') }}" class="img-fluid h-100 rounded"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                        molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="{{ asset('frontend/img/testimonial-3.jpg') }}" class="img-fluid h-100 rounded"
                                        style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0">Client Name</h4>
                                    <p class="mb-3">Profession</p>
                                    <div class="d-flex text-primary mb-3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star text-body"></i>
                                        <i class="fas fa-star text-body"></i>
                                    </div>
                                    <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim error
                                        molestiae aut modi corrupti fugit eaque rem nulla incidunt temporibus quisquam,
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Testimonial End -->
@endsection
