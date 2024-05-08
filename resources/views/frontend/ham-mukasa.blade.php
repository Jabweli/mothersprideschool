@extends('layouts.app')


@section('content')
    


 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="{{url('/')}}">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Campus</span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Ham-Mukasa Branch</span>
   </div>
</div>



<!-- campus section -->

<section class="gulaama">
   <div class="container-wrapper">
        <img src="{{asset('assets/images/main/branch3.jpg')}}" class="branch-image" alt="school image">
       <p class="mt-3">This is our other branch located at Ham-Mukasa, Mukono District</p>


       <div class="administration">
           <div class="general-heading">
               <h4>Administration</h4>
               <h2>Ham-Mukasa School administration</h2>
               <p>
                   The following is our staff at Mother's Pride Primary & Nursery School Mukono - 
                   Ham-Mukasa Branch.
               </p>
               <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="bee-icon">
           </div>
       </div>

       <!-- teachers section -->
       <section id="gulaama-teachers" class="teachers">
           <div class="">
               <div class="wrapper" id="teacher-wrapper">
                @foreach ($teachers as $teacher)
                    <div class="teacher-box">
                        <div class="item-image">
                            <img src="{{asset('uploads/teachers/'.$teacher->image)}}" alt="">
                        </div>
                        <div class="teacher-info">
                            <h3>{{$teacher->subject}}</h3>
                            
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
   </div>
</section>

<!-- end of section -->



<!-- facility section -->
<div class="facilities">
    <div class="container-wrapper">
        <div class="general-heading">
            <h4>FACILITIES</h4>
            <h2>Our school facilities</h2>
            <p>With Mother's Pride, we always put the quality of 
                teaching children first, please rest assured
                when sending children at Mother's Pride.
            </p>
            <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="bee-icon">
        </div>
 
 
        <div class="facility-container">
            <div class="wrapper">
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/sm-book.png')}}" alt="book-icon">
 
                    <div class="facility-text">
                        Television Education learning facility.
                    </div>
                </div>
 
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/sm-restaurant.png')}}" alt="restaurant.png">
 
                    <div class="facility-text">
                        Snacks, breakfast porridge and lunch
                    </div>
                </div>
 
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/icon-accordion-4.webp')}}" alt="">
 
                    <div class="facility-text">
                        Best qualified teaching and non-teaching staff
                    </div>
                </div>
 
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/sm-heart.png')}}" alt="heart-icon">
 
                    <div class="facility-text">
                        Equipped Sickbay with registered nurse 
                    </div>
                </div>
 
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/sm-paint.png')}}" alt="paint-icon">
 
                    <div class="facility-text">
                        Quite environment free from dust and with security .
                    </div>
                </div>
 
                <div class="facility-box">
                    <img src="{{asset('assets/images/icons/sm-book.png')}}" alt="book-icon">
 
                    <div class="facility-text">
                        Play materials and clean environment.
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- end of facility section -->
 
 
 <!-- why choose us section -->
 <section class="choose-us" id="choose-us">
    <div class="general-heading">
        <h4>WHY CHOOSE US</h4>
        <h2>Our core values</h2>
        <p>With Mother's Pride, we always put the quality of 
            teaching children first, please rest assured
            when sending children at Mother's Pride.
        </p>
        <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="bee-icon">
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
                <img src="{{asset('assets/images/main/env.jpg')}}" alt="school building">
 
                <h3>
                    Conducive Environment
                </h3>
                <p>
                    The colorful environment at mother's pride is 
                    suitable for all children, making them more comfortable.
                </p>
            </div>
        </div>
 
        <div class="enroll-call-to-action wrapper">
            <div class="action-text">
                <h2><span>How to</span> Let Your Child Study At mother's pride?</h2>
                <p>Let your child attend Mother's Pride Primary & Nursery School Mukono to help your child develop comprehensively in all aspects</p>
            </div>
            <div class="enroll-btn">
                <a href="{{url('/admission')}}" class="btn">Enroll Now!</a>
            </div>
        </div>
    </div>
 </section>
 
 <!-- end of section -->
 
 
 <!-- director's message -->
 <section class="director">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-3">
                <img src="{{asset('assets/images/main/director.jpg')}}" class="head-image" alt="headteacher">
            </div>
            <div class="col-md-6 mt-3">
                <h3>Director's Remark</h3>
                <h3>Director's Remark</h3>
            <p>
                <span><i class="fas fa-quote-left"></i></span> Welcome to Mother's Pride Schools, we are located at Seeta - 
                Gulaama main Branch and we also have other branches at Kasangalabi and Ham-Mukasa.
            </p>

            <p>                  
                We have very conducive learning environment, offering all round education to our dear learners from nursery to primary.
                We offer music, dance & drama, outdoor games and sports, we also offer life skilling activities like soap making and baking. This is the place
                to be.
                <span><i class="fas fa-quote-right"></i></span>
            </p>
 
            </div>
        </div>
    </div>
 </section>
 
 
 <!-- end of director's message -->



@endsection