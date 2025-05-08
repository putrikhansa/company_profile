  @extends('layouts.frontend')
  @section('content')
      <div class="hero-wrap hero-wrap-2"
          style="background-image: url('frontend/images/bg_2.jpg'); background-attachment:fixed;">
          <div class="overlay"></div>
          <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                  <div class="col-md-8 ftco-animate text-center">
                      <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>About</span>
                      </p>
                      <h1 class="mb-3 bread">About</h1>
                  </div>
              </div>
          </div>
      </div>

      <section class="ftco-section">
          <div class="container">
              <div class="row d-flex">
                  <div class="col-md-6 d-flex ftco-animate">
                      <div class="img img-about align-self-stretch"
                          style="background-image: url('frontend/images/download (6).jpeg'); width: 100%;"></div>
                  </div>
                  <div class="col-md-6 pl-md-5 ftco-animate">
                      <h2 class="mb-4">Welcome to UNAIR Universitas Airlangga</h2>
                      <p>Pada saat pendiriannya, Universitas Airlangga sebagai PTN pelopor di kawasan Indonesia Timur
                          terdiri atas lima fakultas, yaitu Fakultas Kedokteran, Fakultas Kedokteran Gigi, Fakultas Hukum
                          yang berkedudukan di Surabaya (Cabang FH UGM), Fakultas Keguruan dan Ilmu Pendidikan berkedudukan
                          di Malang, dan Fakultas Sastra yang berkedudukan di Denpasar-Bali. Dari lima fakultas pendiri
                          UNAIR tersebut, dua fakultas sudah ada sebelum Perang Dunia I, yaitu Fakultas Kedokteran berasal
                          dari NIAS tahun 1913 dan Fakultas Kedokteran Gigi yang berasal dari STOVIT tahun 1928.
                      <p>Pemberian nama Airlangga, karena Airlangga yang artinya “Sang Pemelihara” adalah seorang raja
                          sangat terkenal pada Abad XI. Raja yang arif dan bijaksana, cakap, dan mampu mempersatukan wilayah
                          di kawasan Timur Indonesia.
                      </p>
                  </div>
              </div>
          </div>
      </section>

      <section class="ftco-section-3 img" style="background-image: url(frontend/images/bg_3.jpg);">
          <div class="overlay"></div>
          <div class="container">
              <div class="row d-md-flex justify-content-center">
                  <div class="col-md-9 about-video text-center">
                      <h2 class="ftco-animate">Genius University is a Leading Schools Around the World</h2>
                  </div>
              </div>
      </section>

      <section class="ftco-section testimony-section">
          <div class="container">
              <div class="row justify-content-center mb-5 pb-3">
                  <div class="col-md-7 heading-section ftco-animate text-center">
                      <h2 class="mb-4">What Our Student Says</h2>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 ftco-animate">
                      <div class="carousel-testimony owl-carousel">
                          <div class="item">
                              <div class="testimony-wrap text-center">
                                  <div class="user-img mb-5" style="background-image: url(frontend/images/person_1.jpg)">
                                      <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                      </span>
                                  </div>
                                  <div class="text">
                                      <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                          Vokalia and Consonantia, there live the blind texts. Separated they live in
                                          Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      <p class="name">Dennis Green</p>
                                      <span class="position">CSE Student</span>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="testimony-wrap text-center">
                                  <div class="user-img mb-5" style="background-image: url(frontend/images/person_2.jpg)">
                                      <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                      </span>
                                  </div>
                                  <div class="text">
                                      <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                          Vokalia and Consonantia, there live the blind texts. Separated they live in
                                          Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      <p class="name">Dennis Green</p>
                                      <span class="position">Math Student</span>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="testimony-wrap text-center">
                                  <div class="user-img mb-5" style="background-image: url(frontend/images/person_3.jpg)">
                                      <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                      </span>
                                  </div>
                                  <div class="text">
                                      <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                          Vokalia and Consonantia, there live the blind texts. Separated they live in
                                          Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      <p class="name">Dennis Green</p>
                                      <span class="position">Science Students</span>
                                  </div>
                              </div>
                          </div>
                          <div class="item">
                              <div class="testimony-wrap text-center">
                                  <div class="user-img mb-5" style="background-image: url(frontend/images/person_3.jpg)">
                                      <span class="quote d-flex align-items-center justify-content-center">
                                          <i class="icon-quote-left"></i>
                                      </span>
                                  </div>
                                  <div class="text">
                                      <p class="mb-5">Far far away, behind the word mountains, far from the countries
                                          Vokalia and Consonantia, there live the blind texts. Separated they live in
                                          Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                      <p class="name">Dennis Green</p>
                                      <span class="position">English Student</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endsection
