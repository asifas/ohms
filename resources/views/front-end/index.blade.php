<!DOCTYPE html>
<html lang="en">
<head>
    <title>OHMS - Online Hospital Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('assets/front-end/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/front-end/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-end/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-end/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front-end/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-end/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/front-end/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-end/css/style.css') }}">
</head>
<body>
<div class="top py-1">
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center">
                <p class="mb-0"><a href="#">ohms@email.com</a> | <a href="#">Help Desk</a> | </p>
            </div>
            <div class="col-4 d-flex justify-content-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 mb-md-0 mb-4 d-flex align-items-center">
                <a class="navbar-brand" href="index.html">OHMS</a>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-8 mb-md-0 mb-3">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-location-arrow"></span></div>
                            <div class="text">
                                <span>Address</span><span>201/N1, Main Road, Dhanmondi 27, Dhaka-1200.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-phone"></span></div>
                            <div class="text"><span>Call us</span><span>(+01) 123 456 7890</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        @auth
            <div class="order-lg-last">
                <a href="{{ route('home') }}" class="text-uppercase text-bold mr-3">Dashboard</a>
            </div>
        @else
            <div class="order-lg-last">
                <a href="{{ route('login') }}" class="text-uppercase text-bold mr-3">login</a>
            </div>
            @if(Route::has('register'))
                <div class="order-lg-last">
                    <a href="{{ route('register') }}" class="btn btn-primary">Registration</a>
                </div>
            @endif
        @endauth
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="department.html" class="nav-link">Departments</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<div class="hero-wrap">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{ asset('assets/front-end/images/bg_1.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end">
                    <div class="col-md-6 ftco-animate">
                        <div class="text w-100">
                            <h1 class="mb-4">Welcome to our ohms centre</h1>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="{{route('appointment.post')}}" class="btn btn-primary">Book an appointment</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url({{ asset('assets/front-end/images/bg_2.jpg') }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-end">
                    <div class="col-md-6 ftco-animate">
                        <div class="text w-100">
                            <h1 class="mb-4">Ohms care for the whole family</h1>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                            <p><a href="#" class="btn btn-primary">Book an appointment</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-12">
                <div class="wrap-appointment d-md-flex">
                    <div class="col-md-8 bg-primary p-5 heading-section heading-section-white">
                        <span class="subheading">Consult with your doctor</span>
                        <h2 class="mb-4">Booking an Appointment</h2>
                        <form action="#" class="appointment">
                            <div class="row justify-content-center">
                                @php
                                    $doctors = \App\Models\User::where('is_doctor', 1)->get();
                                @endphp
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="doctor_id" id="" class="form-control">
                                                    <option value="" selected disabled hidden>Select Doctor</option>
                                                    @foreach($doctors as $doctor)
                                                        <option
                                                            value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Chiropractor</option>
                                                    <option value="">John Doe</option>
                                                    <option value="">William Smith</option>
                                                    <option value="">Danny Green</option>
                                                    <option value="">Jason Thompson</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="fa fa-calendar"></span></div>
                                            <input type="text" name="appointment_date"
                                                   class="form-control appointment_date" placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-wrap">
                                            <div class="icon"><span class="fa fa-clock-o"></span></div>
                                            <input type="text" name="appointment_slot"
                                                   class="form-control appointment_time" placeholder="Time">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-3"></div>

                            </div>
                        </form>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <a href="{{ route('appointment.post') }}" class="btn btn-secondary py-3 px-4">
                                    Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 bg-white text-center p-5">
                        <div class="desc border-bottom pb-4">
                            <h2>Business Hours</h2>
                            <div class="opening-hours">
                                <h4>Opening Days:</h4>
                                <p class="pl-3">
                                    <span><strong>Monday – Friday:</strong> 9am to 20 pm</span>
                                    <span><strong>Saturday :</strong> 9am to 17 pm</span>
                                </p>
                                <h4>Vacations:</h4>
                                <p class="pl-3">
                                    <span>All Sunday Days</span>
                                    <span>All Official Holidays</span>
                                </p>
                            </div>
                        </div>
                        <div class="desc pt-4 ">
                            <h3 class="heading">For Emergency Cases</h3>
                            <span class="phone">(+01) 123 456 7890</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">We offer Services</span>
                <h2>Our Benefits</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-chiropractic"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Spinal Manupulation</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-acupuncture"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Medical Acupuncture</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-electrotherapy"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Electrotherapy</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-examination"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Therapeutic Exercise</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-lymph-nodes"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Manual Lympahtic</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-bone"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Joint Mobilization</h3>
                        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                            unorthographic.</p>
                        <p><a href="#" class="btn-custom">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex order-md-last">
                <div
                    class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                    style="background-image:url({{ asset('assets/front-end/images/about.jpg') }});">
                    <a href="https://vimeo.com/45830194"
                       class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pr-md-5 py-md-5">
                <div class="row justify-content-start py-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome to OHMS</span>
                        <h2 class="mb-4">About OHMS</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the
                            Semantics, a large language ocean. A small river named Duden flows by their place and
                            supplies it with the necessary regelialia. It is a paradisematic country, in which roasted
                            parts of sentences fly into your mouth.</p>
                    </div>
                </div>
                <div class="row ftco-counter pb-5" id="section-counter">
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="45">0</strong>
                            </div>
                            <div class="text">
                                <span>Years of <br>Experienced</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="2342">0</strong>
                            </div>
                            <div class="text">
                                <span>Happy <br>Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong class="number" data-number="30">0</strong>
                            </div>
                            <div class="text">
                                <span>Award <br>Winning</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-dark">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Testimonies</span>
                <h2>Happy Clients &amp; Feedbacks</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-quote-left"></span></div>
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
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
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">News &amp; Blog</span>
                <h2>Latest news from our blog</h2>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                       style="background-image: url({{ asset('assets/front-end/images/image_1.jpg') }});">
                    </a>
                    <div class="text mt-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author"
                                 style="background-image: url({{ asset('assets/front-end/images/person_2.jpg') }});"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                       style="background-image: url({{ asset('assets/front-end/images/image_2.jpg') }});">
                    </a>
                    <div class="text mt-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author"
                                 style="background-image: url({{ asset('assets/front-end/images/person_3.jpg') }});"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20 rounded"
                       style="background-image: url({{ asset('assets/front-end/images/image_3.jpg') }});">
                    </a>
                    <div class="text mt-3">
                        <div class="posted mb-3 d-flex">
                            <div class="img author"
                                 style="background-image: url({{ asset('assets/front-end/images/person_1.jpg') }});"></div>
                            <div class="desc pl-3">
                                <span>Posted by John doe</span>
                                <span>24 February 2020</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="#">What Every Athlete Needs To Know About Injury Recovery</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer ftco-section ftco-no-pt">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget py-4 py-md-5">
                    <h2 class="logo"><a href="#">OHMS</a></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                        <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget ml-md-5 py-5">
                    <h2 class="ftco-heading-2">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Spinal
                                Manupulation</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Electrotherapy</a>
                        </li>
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Manual Lympahtic</a>
                        </li>
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Medical
                                Acupuncture</a></li>
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Therapeutic Exercise</a>
                        </li>
                        <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Joint
                                Mobilization</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget py-4 py-md-5">
                    <h2 class="ftco-heading-2">Contact information</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span
                                        class="text">+2 392 3929 210</span></a></li>
                            <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">ohms@gmail.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg">
                <div class="ftco-footer-widget bg-primary p-4 py-5">
                    <h2 class="ftco-heading-2">Business Hours</h2>
                    <div class="opening-hours">
                        <h4>Opening Days:</h4>
                        <p class="pl-3">
                            <span>Monday – Friday : 9am to 20 pm</span>
                            <span>Saturday : 9am to 17 pm</span>
                        </p>
                        <h4>Vacations:</h4>
                        <p class="pl-3">
                            <span>All Sunday Days</span>
                            <span>All Official Holidays</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>


<script src="{{ asset('assets/front-end/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('assets/front-end/js/google-map.js') }}"></script>
<script src="{{ asset('assets/front-end/js/main.js') }}"></script>

</body>
</html>
