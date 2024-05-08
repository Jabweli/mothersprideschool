@extends('layouts.app')


@section('content')
    
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/main/students.jpg')}}" alt="students" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <div class="hero-text">
                    <h6>Welcome to</h6>
                    <div class="school-name">
                        <h4>Mother's Pride Primary & Nursery School Mukono</h4>
                    </div> 
                    <h1>A bright future for all</h1>
                    <p>
                        We are the best primary & nursery school that your child needs.
                    </p>
        
                    <a href="{{url('/about')}}" class="btn hero-btn">Discover more <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/main/playground2.jpg')}}" alt="children playing" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <div class="hero-text">
                    <h6>Apply for Admission</h6>
                    <div class="school-name">
                        <h4>Mother's Pride Primary & Nursery School Mukono</h4>
                    </div> 
                    <h1>How to enroll your child to a class?</h1>
                    <p>
                        Get your child the best education he/she deserves.
                    </p>
        
                    <a href="{{url('/admission')}}" class="btn hero-btn">Apply now <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div> 
            <div class="overlay"></div>
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/main/teacher.jpg')}}" alt="teacher" class="d-block" style="width:100%">
            <div class="carousel-caption">
                <div class="hero-text">
                    <h6>kindergarten Program</h6>
                    <div class="school-name">
                        <h4>Mother's Pride Primary & Nursery School Mukono</h4>
                    </div> 
                    <h1>best children's education</h1>
                    <p>
                        Get your child the best education he/she deserves.
                    </p>
        
                    <a href="{{url('/admission')}}" class="btn hero-btn">Apply now <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div> 
            <div class="overlay"></div> 
        </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <!-- <span class="carousel-control-prev-icon"></span> -->
      <i class="fas fa-long-arrow-left"></i>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <!-- <span class="carousel-control-next-icon"></span> -->
      <i class="fas fa-long-arrow-right"></i>
    </button>
  </div>

<!-- end of hero section -->


<!-- admission call to action section -->

<div class="ad-call-to-action">
    <div class="ad-img">
        <img src="{{asset('assets/images/main/apply.jpg')}}" alt="">
    </div>
    <div class="ad-text-container">
        <h2>Apply for admission</h2>

        <div class="wrapper">
            <div class="ad-text">
                Mother's Pride Primary & Nursery School Mukono is a supportive community 
                that champions respect and success.
            </div>
            <div class="ad-btn">
                <a href="{{url('/admission')}}" class="btn">Learn more <i class="fas fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- end  of admission call to action section -->



<!-- about section -->
<section class="about" id="about">
    <div class="container-wrapper">
        <div class="wrapper">
            <div class="about-info-container">
                <div class="heading">
                    <h4>About us</h4>
                    <h2>Discover our school</h2>
                    <p>
                        Our Main Campus is located on Plot 851, Seeta Gulaama and our branches are located on Plot 2329 - 
                        along Elizabeth Nantezza Road, Ham Mukasa Village in Mukono District Uganda and also Kasangalabi Village in Mukono.
                        We are home to pupils in lower primary & nursery and have an expert teaching staff because we
                        strive for the best for our pupils. 
                    </p>

                    <p>
                        We are proud of our international and multi-cultural ethics, 
                        and the way our community collaborates to make a difference.
                    </p>

                    <p>
                        Mother’s pride has a lot to offer your child. Priority is given to learning 
                        but pupils participate in a wide range of school life activities developing 
                        the qualities and values that will lead to their personal success.
                    </p>
                    <a href="{{url('/about')}}">Learn more <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>

            <div class="about-image">
                <img src="{{asset('assets/images/main/about.jpg')}}" alt="about-image">
            </div>
        </div>
    </div>
</section>

<!-- end of about section -->



<!-- why choose us section -->
<section class="choose-us" id="choose-us">
    <div class="general-heading">
        <h4>WHY CHOOSE US</h4>
        <h2>Our core values</h2>
        <p>At Mother's Pride, we always put the quality of 
            teaching children first, please rest assured
            when sending children at Mother's Pride.
        </p>
        <img src="assets/images/icons/image-bee.webp" alt="">
    </div>

    <div class="container">
        <div class="card-wrapper">
            <div class="card-box">
                <img src="{{asset('assets/images/main/play.jpg')}}" alt="children playing">

                <h3>Learn and play</h3>
                <p>
                    With the criteria of playing and learning together, 
                    children will have a comfortable.
                </p>
            </div>
            <div class="card-box">
                <img src="{{asset('assets/images/main/meals.webp')}}" alt="dish">

                <h3>Nutritious Meal</h3>
                <p>
                    Children's meals need to be provided with 
                    all the nutrients necessary for a day of play
                </p>
            </div>
            <div class="card-box">
                <img src="{{asset('assets/images/main/teacher.jpg')}}" alt="teacher">

                <h3>Great Teachers</h3>
                <p>
                    Experienced and dedicated teachers team will help 
                    your child develop more in all aspects.
                </p>
            </div>
            <div class="card-box">
                <img src="{{asset('assets/images/main/env.jpg')}}" alt="cool environment">

                <h3>
                    Conducive Environment
                </h3>
                <p>
                    The colorful environment at Mother's pride is 
                    suitable for all children, making them more comfortable.
                </p>
            </div>
        </div>

        <div class="enroll-call-to-action wrapper">
            <div class="action-text">
                <h2><span>How to</span> Let Your Child Study At mother's pride?</h2>
                <p>Let your child attend Mother's Pride Primary & Nursery School to help your child develop comprehensively in all aspects</p>
            </div>
            <div class="enroll-btn">
                <a href="{{url('/admission')}}" class="btn">Enroll Now!</a>
            </div>
        </div>
    </div>
</section>

<!-- end of section -->


<!-- mission section -->
<section class="mission" id="mission">
    <div class="container">
        <div class="wrapper">
            <div class="mission-img">
                <img src="{{asset('assets/images/school/banner-1.png')}}" alt="banner">
            </div>
            <div class="mission-text">
                <h2>Guiding The Young Generation To Success.</h2>
                <p>
                    Since we started operation, our goal has been to provide quality 
                    early childhood & primary education through our programs. Our primary focus is the 
                    wellbeing of every child. We provide our children the attention 
                    they need to grow and develop into happy, healthy people and be 
                    confident for school.
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <h3>our mission</h3>
                        <p>
                            Our mission is to provide a safe, disciplined learning environment 
                            that empowers all pupils to develop their full potential.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h3>our vission</h3>
                        <p>
                            To provide a safe, secure and happy environment where children are free
                            to explore, play and learn.
                        </p>
                    </div>
                </div>
                <a href="{{url('/about')}}" class="btn">Learn more about us</a>
            </div>
        </div>
    </div>
</section>
<!-- end of mission section -->



<!-- campus section -->

<section class="campus" id="campus">
    <div class="general-heading">
        <h4>CAMPUSES</h4>
        <h2>Our School Campuses</h2>
        <p>
            We are continously expanding our territories to reach as many pupils as we can.
        </p>
        <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="">
    </div>

    <div class="container mt-5">
        <div class="wrapper" id="campus-wrapper">
            <div class="campus-box">
                <a href="{{url('/branch/gulaama')}}">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/about.jpg')}}" alt="">
                    </div>
                    <div class="campus-info">
                        <h3>Mother's Pride primary & nursery school mukono</h3>
                        <p>Main Campus - Gulaama</p>
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="{{url('/branch/kasangalabi')}}">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/env.jpg')}}" alt="">
                    </div>
                    <div class="campus-info">
                        <h3>Mother's Pride primary & nursery school mukono</h3>
                        <p>Kasangalabi Branch</p>
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="{{url('branch/ham-mukasa')}}">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/branch3.jpg')}}" alt="">
                    </div>
                    <div class="campus-info">
                        <h3>Mother's Pride primary & nursery school mukono</h3>
                        <p>Ham Mukasa Branch</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="campus-btn">
            <!-- <a href="#" class="btn">View all Campuses</a> -->
        </div>
    </div>
</section>


<!-- end of campus section -->



<!-- school activities section -->
<section class="activity" id="activity">

    <div class="general-heading">
        <h4>THINGS FOR PUPILS</h4>
        <h2>general school activities</h2>
        <p>
            We offer strategies for building positive child relationships, 
            helping children develop self-regulation and responding to challenging 
            behaviors.
        </p>
        <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="">
    </div>

    <div class="container">
        <div class="wrapper">
            <div class="activity-col left-col">
                <div class="activity-box wrapper">
                    <div class="activity-text">
                        <h3>creative activities</h3>
                        <p>
                            Creative activities help children develop comprehensively 
                            intelligent.
                        </p>
                    </div>
                    <div class="activity-icon icon-green left">
                        <img src="{{asset('assets/images/icons/icon-fcb-10.webp')}}" alt="">
                    </div>
                </div>

                <div class="activity-box wrapper">
                    <div class="activity-text">
                        <h3>Sports Activites</h3>
                        <p>
                            we make sure our pupils enagage in various sports 
                            activities <span class="text-lowercase">e.g</span> football, netball.
                        </p>
                    </div>
                    <div class="activity-icon icon-red left">
                        <img src="{{asset('assets/images/icons/icon-fcb-11.webp')}}" alt="">
                    </div>
                </div>
            </div>


            <div class="activity-img">
                <img src="{{asset('assets/images/school/child-man.webp')}}" alt="">
            </div>


            <div class="activity-col right-col">
                <div class="activity-box wrapper">
                    <div class="activity-icon icon-blue right">
                        <img src="{{asset('assets/images/icons/icon-fcb-12.webp')}}" alt="">
                    </div>
                    <div class="activity-text">
                        <h3>Swimming</h3>
                        <p>
                            As part of leisure and fun, our pupils are given free Swimming
                           lessons.
                        </p>
                    </div>
                </div>

                <div class="activity-box wrapper">
                    <div class="activity-icon icon-yellow right">
                        <img src="{{asset('assets/images/icons/icon-fcb-13.webp')}}" alt="">
                    </div>
                    <div class="activity-text">
                        <h3>Music Dance & Drama</h3>
                        <p>
                            An opportunity for pupils to showcase their God given
                            talents and gifts.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</section>

<!-- end of school activities section -->



<!-- facilities section -->

<section class="campus" id="campus">
    <div class="general-heading">
        <h4>FACILITIES</h4>
        <h2>Our school facilities</h2>
        <p>With Mother's Pride, we always put the quality of 
            teaching children first, please rest assured
            when sending children at Mother's Pride.
        </p>
        <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="bee-icon">
    </div>

    <div class="container ">
        <div class="wrapper" id="facility-wrapper">
            <div class="campus-box">
                <a href="{{url('/gulaama')}}">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/van2.jpg')}}" class="f-image" alt="school van">
                    </div>
                    <div class="campus-info">
                        <h3>School Transport Van</h3>
                        {{-- <p>Transport Facility</p> --}}
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/playground2.jpg')}}" class="f-image" alt="playground">
                    </div>
                    <div class="campus-info">
                        <h3>Children's Play Castles</h3>
                        {{-- <p>Games & Play</p> --}}
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/boarding.jpg')}}" class="f-image" alt="school boarding">
                    </div>
                    <div class="campus-info">
                        <h3>Primary Boarding Section</h3>
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/playground.jpg')}}" class="f-image" alt="children play">
                    </div>
                    <div class="campus-info">
                        <h3>Children's Play Castles</h3>
                        {{-- <p>Games & Play</p> --}}
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/meals.jpeg')}}" class="f-image" alt="dish">
                    </div>
                    <div class="campus-info">
                        <h3>Special Nutritious Meals</h3>
                        {{-- <p>Special Meals</p> --}}
                    </div>
                </a>
            </div>

            <div class="campus-box">
                <a href="">
                    <div class="item-image">
                        <img src="{{asset('assets/images/main/apply.jpg')}}" alt="children studying">
                    </div>
                    <div class="campus-info">
                        <h3>Conducive environment</h3>
                        {{-- <p>Class Rooms</p> --}}
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- end of fcilities section -->





<!-- teachers section -->
<section id="teachers" class="teachers">
    <div class="general-heading">
        <h4>ABOUT TEACHERS</h4>
        <h2>our best teachers</h2>
        <p>
            We have an excellent teacher to child ratio at our nursery & primary level 
            to ensure that each child receives the attention he or she needs.
        </p>
        <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="">
    </div>

    <div class="container mt-5">
        <div class="wrapper" id="teacher-wrapper">
            {{-- fetch teacher data --}}
            @foreach ($teachers as $teacher)
                <div class="teacher-box">
                    <div class="item-image">
                        <img src="{{asset('uploads/teachers/'.$teacher->image)}}" alt="teacher">
                    </div>
                    <div class="teacher-info">
                        <h3>
                            @if ($teacher->subject == 'English')
                                Teacher of {{$teacher->subject}}
                            @else
                                {{$teacher->subject}}
                            @endif
                        </h3>
                        {{-- <p>{{$teacher->subject}}</p> --}}
                    </div>
                </div>
            @endforeach
            
        </div>
        <div class="teacher-btn">
            <a href="{{url('/staff')}}" class="btn">View all teachers</a>
        </div>
    </div>
</section>

<!-- end of teachers section -->



@endsection