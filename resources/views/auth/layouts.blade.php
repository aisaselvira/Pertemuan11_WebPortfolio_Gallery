<!DOCTYPE html> <html lang="en"> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> <link
    href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext"
    rel="stylesheet"> <!-- For favicon png --> 
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"
    rel="stylesheet"> 
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}"> 
    <link rel="stylesheet" href="{{ asset('lightbox2-dev\dist\css\lightbox.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
<title>Personal CV</title>
</head>

<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>


    <script src="{{ asset('assets/js/jquery.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/bootsnav.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.sticky.js')}}"></script>

    <script src="{{ asset('assets/js/progressbar.js')}}"></script>

    <script src="{{ asset('assets/js/jquery.appear.js')}}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('lightbox2-dev\dist\js\lightbox-plus-jquery.min.js') }}"></script>
</body>

</html>