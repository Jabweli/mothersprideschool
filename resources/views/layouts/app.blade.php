<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mothers Pride School Mukono') }}</title>

    <meta name="meta_title" content="Mother's Pride Primary & Nursery School Mukono">
    <meta name="description" content="We are located On Plot 851, Seeta Gulaama 
    and our Branches are located On Plot 2329 - along Elizabeth Nantezza Road, Ham Mukasa 
    Village In Mukono District Uganda and also Kasangalabi Village In Mukono. We Are Home 
    to pupils in lower primary & nursery and have an expert 
    teaching staff because we strive for the best for our students">

    <meta name="director" content="Ms. Teddy Nyamwenge">
    <meta name="author" content="Stanley Jabwel">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome6/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/slick-1.8.1/slick/slick.css')}}">
     {{-- toastr --}}
     <link rel="stylesheet" href="{{asset('assets/adminpanel/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.min.css')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @php
        $settings = DB::table('settings')->where('id', '1')->first();
    @endphp
    <div id="app">
        <!--top bar  -->
        <div class="topbar" id="topbar">
            <div class="container">
                <div class="wrapper">
                    <div class="contact-info">
                        <div class="contact-content">
                            <span><i class="fas fa-mobile-phone"></i></span>
                            <span>{{$settings->phone}}</span>
                            <span class="spacer"><i class="fas fa-map-marker-alt"></i></span>
                            <span>{{$settings->address}}</span>
                            <span class="spacer"><i class="fas fa-clock"></i></span>
                            <span>Mon-Sat 8am - 5pm, Sun closed</span>
                        </div>
                    </div>

                    <div class="social-icons">
                        <a href="{{$settings->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="{{$settings->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="{{$settings->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:{{$settings->email}}" target="_blank"><i class="fa fa-envelope"></i></a> 
                    </div>
                </div>
            </div>
        </div>

        <!-- header -->
        <header id="header">
            <a href="{{url('/')}}" class="logo">
                <img src="{{asset('assets/images/logo.jpeg')}}" class="logo-img" alt="logo">
                <span>Mother's Pride</span>
            </a>
            <nav class="navbar" id="navbar">
                <a href="{{url('/')}}" class="nav-link {{ request()->is('/') ? 'active':''}}">Home</a>
                <a href="{{url('/about')}}" class="nav-link {{ request()->is('about') ? 'active':''}}">about us</a>
                <a href="{{url('/staff')}}" class="nav-link {{ request()->is('staff') ? 'active':''}}">Our staff</a>
                <a href="{{url('/events')}}" class="nav-link {{ request()->is('events') ? 'active':''}}">Events</a>
                <a href="{{url('/news')}}" class="nav-link {{ request()->is('news') ? 'active':''}}">News</a>
                <a href="{{url('/gallery')}}" class="nav-link {{ request()->is('gallery') ? 'active':''}}">Media</a>
                <a href="{{url('/contact')}}" class="nav-link {{ request()->is('contact') ? 'active':''}}">contact Us</a>
            </nav>

            <div class="icons">
                <i class="fas fa-search" id="search-icon"></i>
                <i class="fas fa-bars" id="menu-bar"></i>
                <a href="{{url('/admission')}}" class="btn btn-sm apply-btn">Enroll Now</a>
            </div>
        </header>

        <!-- search form -->
        <form action="#" id="search-form">
            <input type="text" placeholder="Search here...">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-times" id="close"></i>
        </form>

        <main>
            @yield('content')
        </main>


        <!-- footer call to action -->
        <div class="footer-action enroll-call-to-action wrapper">
            <div class="action-text">
                <h2><span>How to</span> Let Your Child Study At Mother's pride?</h2>
                <p>Let your child attend Mother's Pride Primary & Nursery School Mukono to help your child develop comprehensively in all aspects</p>
            </div>
            <div class="enroll-btn">
                <a href="{{url('/admission')}}" class="btn">Enroll Now!</a>
            </div>
        </div>
        <!-- end of footer call to action -->


        <!-- footer section -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-col mb-3">
                        <h2>Mother's Pride primary & nursery school mukono</h2>
                        <p>
                            Come visit our school and see for yourself so 
                            you can tour the rooms and meet some of our educators. We offer high Quality early education.
                        </p>
                        <div class="social-icons">
                            <a href="{{$settings->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{$settings->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{$settings->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="mailto:{{$settings->email}}" target="_blank"><i class="fa fa-envelope"></i></a> 
                        </div>
                    </div>
        
                    <div class="col-md-4 footer-col">
                        <h2>Contact Us</h2>
                        <div class="wrapper">
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="text">
                                +256 779 582 368
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text text-lowercase">
                                mothersprideprimarynursery@gmail.com
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                Seeta-Mukono, Uganda
                            </div>
                        </div>
                        <div class="wrapper">
                            <div class="icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="text">
                                <p>Mon - Sat(8am - 6pm) </p>
                                <p>Sunday CLOSED</p>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-md-2 footer-col link-list">
                        <h2>Quick links</h2>
        
                        <a href="{{url('/')}}"><i class="fas fa-caret-right"></i> Home</a>
                        <a href="{{url('about')}}"><i class="fas fa-caret-right"></i> About</a>

                        <a href="{{url('staff')}}"><i class="fas fa-caret-right"></i> Our Staff</a>
                        <a href="{{url('contact')}}"><i class="fas fa-caret-right"></i> Contact Us</a>
                        <a href="{{url('events')}}"><i class="fas fa-caret-right"></i> Events</a>              
                    </div>
        
                    <div class="col-md-2 footer-col link-list">
                        <h2>Resources</h2>
                        <a href="{{url('admission')}}"><i class="fas fa-caret-right"></i> Admission</a>
                        <a href="#"><i class="fas fa-caret-right"></i> Career</a>
                        <a href="#"><i class="fas fa-caret-right"></i> Academic calendar</a>
                        <a href="{{url('school-policy')}}"><i class="fas fa-caret-right"></i> School policy</a>
                        <a href="#"><i class="fas fa-caret-right"></i> Terms & conditions</a> 
                    </div>
                </div>
            </div>
        </footer>
        <div class="footer-bottom">
            <small>
                <i class="fas fa-copyright"></i>
                <span>2023 Mother's Pride Primary & Nursery School Mukono. All Rights Reserved.</span>
            </small>
            <i class="fas fa-arrow-up" id="up-btn"></i>
        </div>


        <!-- end of footer section -->
    </div>

    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/slick-1.8.1/slick/slick.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('assets/adminpanel/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/script.min.js')}}"></script>

<script>
$('#facility-wrapper').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('.blog-prev'),
    nextArrow: $('.blog-next'),
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [

        {
            breakpoint: 768,
            settings: {
                infinite:true,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                infinite:true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
    ]
});


@if(Session::has('message'))
    toastr.success("{{ session('message')}}")
@endif

@if(Session::has('warning'))
    toastr.warning("{{ session('warning')}}")
@endif

@if(Session::has('info'))
    toastr.info("{{ session('info')}}")
@endif

@if(Session::has('danger'))
    toastr.danger("{{ session('danger')}}")
@endif
</script>
</body>
</html>
