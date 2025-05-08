@extends('layouts.frontend')
@section('content')
    <div class="hero-wrap"
        style="background-image: url('frontend/images/Romanticizing Unair❤️_🔥.jpeg'); background-attachment:fixed;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center">
                    <h1 class="mb-4">Universitas Airlangga</h1>
                    <p>ORLD UNIVERSITIES ASSOCIATION FOR COMMUNITY DEVELOPMENT (WUACD)</p>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-search-course">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="courseSearch-wrap d-md-flex flex-column-reverse">

                        <div class="full-wrap ftco-animate">
                            <div class="one-half">
                                <div class="featured-blog d-md-flex">
                                    <div class="image d-flex order-last">
                                        <a href="#" class="img"
                                            style="background: url('frontend/images/universitas airlangga.jpeg');"></a>
                                    </div>
                                    <div class="text order-first">
                                        <h2><a href="#">UNAIR</a></h2>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary
                                            regelialia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span
                                class="flaticon-exam"></span></div>
                        <div class="media-body px-3">
                            <h3 class="heading">Admission</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span
                                class="flaticon-blackboard"></span></div>
                        <div class="media-body px-3">
                            <h3 class="heading">Notice Board</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services p-3 py-4 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center mb-3"><span
                                class="flaticon-books"></span></div>
                        <div class="media-body px-3">
                            <h3 class="heading">Our Library</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section-3 img" style="background-image: url(frontend/images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-center">
                <div class="col-md-9 about-video text-center">
                    <h2 class="ftco-animate"> University Airlangga is a Leading Schools Around the World</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"> Our Dosen UNAIR </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($dosen as $data)
                            <div class="item">
                                <div class="testimony-wrap text-center">
                                    <div class="user-img mb-5"
                                        style="background-image: url({{ asset('storage/dosen/' . $data->foto) }})">
                                        <img src="{{ asset('storage/dosen/' . $data->foto) }}" alt="" width="100"
                                            style="border-radius: 100%;">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <h1>{{ $data->nama_dosen }}</h1>
                                    <div class="text">
                                        <p>{{ $data->email }}</p>
                                        <p>{{ $data->jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Courses</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch">
                        <a href="#" class="img" style="background-image: url(frontend/images/course-1.jpg)"></a>
                        <div class="text p-4">
                            <p class="category"><span>English</span></p>
                            <h3 class="mb-3"><a href="#">English for Tommorow</a></h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name</p>
                            <p><a href="#" class="btn btn-primary">Enroll now!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch">
                        <a href="#" class="img" style="background-image: url(frontend/images/course-2.jpg)"></a>
                        <div class="text p-4">
                            <p class="category"><span>Science</span></p>
                            <h3 class="mb-3"><a href="#">Computer Engineering</a></h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name</p>
                            <p><a href="#" class="btn btn-primary">Enroll now!</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="course align-self-stretch">
                        <a href="#" class="img" style="background-image: url(frontend/images/course-3.jpg)"></a>
                        <div class="text p-4">
                            <p class="category"><span>Business</span></p>
                            <h3 class="mb-3"><a href="#">Business Studies</a></h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic life One day however a small line of blind text by the name</p>
                            <p><a href="#" class="btn btn-primary">Enroll now!</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-10 ftco-animate">
                    <p><strong>When she reached</strong> the first hills of the Italic Mountains, she had a last view back
                        on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of
                        her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her
                        way.</p>
                    <p><span>Just Browsing?</span><a href="course.html"> View All Courses</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Recent from blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/image_1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">August 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/image_2.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">August 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/image_3.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">August 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-3"><a href="#">How to standout at start of your UX Career</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Latest Events</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/event-1.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry d-flex align-self-stretch flex-column-reverse">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/event-2.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="blog-single.html" class="block-20"
                            style="background-image: url('frontend/images/event-3.jpg');">
                        </a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">Sep. 10, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mb-4"><a href="#">Intern Bootcamp Meetup 2018</a></h3>
                            <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> 10:30AM-03:30PM</span>
                                <span><i class="icon-map-o"></i> Venue Main Campus</span>
                            </p>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                            </p>
                            <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                            live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
