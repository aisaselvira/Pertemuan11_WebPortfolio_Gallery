<!DOCTYPE html> <html lang="en"> 
    <head> <meta charset="utf-8"> 
    <meta content="width=device-width, initial-scale=1.0"
    name="viewport"> <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet"> <link href="assets/vendor/aos/aos.css" rel="stylesheet"> <link
    href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> <link
    href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/css/styles.css"rel="stylesheet"> </head> <body> <header id="header" class="fixed-top d-flex
    align-items-center"> <div class="container d-flex justify-content-between align-items-center"> <div class="logo">
    <h1><a href="index.html">Aisa Selvira</a></h1> </div>

<nav id="navbar" class="navbar">
<ul>
    <li><a class="active " href="dashboard">Home</a></li>
    <li><a href="#about">About Me</a></li>
    <li><a href="#education">Education</a></li>
    <li><a href="#skills">Skills</a></li>
    <li><a href="#experience">Experience</a></li>
    <li><a href="#profiles">Profile</a></li>
    <li><a href="#portfolio">Gallery Portfolio</a></li>
    <li><a href="#contact">Contact Me</a></li>
    <ul class="navbar-nav ms-auto">
        @guest
        <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link {{ request()->is('login') ? 'active' : '' }}">Login</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register') }}"
                class="nav-link {{ request()->is('register') ? 'active' : '' }}">Register</a>
        </li>
            @else
            <li class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

    </div>
    </header>

    <section class="hero-section" id="hero">

        <div class="wave">

            <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                            d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                            id="Path"></path>
                    </g>
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 hero-text-image">
                    <div class="row">
                        <div class="col-lg-8 text-center text-lg-start">
                            <h1 data-aos="fade-right">I'm Aisa Selvira</h1>
                            <p class="mb-5" data-aos="fade-right" data-aos-delay="100">UI/UX Designer & Front End
                                Developer</p>
                            <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                                <a href="assets/file/CV_AisaSelvira.pdf" download="CV_AisaSelvira.pdf"
                                    class="btn btn-outline-white">Download CV</a>
                            </p>
                        </div>
                        <div class="col-lg-4 iphone-wrap">
                            <img src="assets/img/me3.png" alt="Image" class="phone-1" data-aos="fade-right">
                            <img src="assets/img/me2.png" alt="Image" class="phone-2" data-aos="fade-right"
                                data-aos-delay="200">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    </body>

    </html>