@extends('layouts.app')

@section('content')

 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Events</span>
   </div>
</div>

<!-- staff section -->
<section id="teachers" class="staff">
   <div class="general-heading">
       <h4>SCHOOL EVENTS</h4>
       <h2>things going on</h2>
       <img src="assets/images/icons/image-bee.webp" alt="">
   </div>

   <div class="event-section mt-5">
       <div class="container-wrapper">
           <div class="wrapper">

            @forelse ($events as $event)
                <div class="event-box">
                    <img src="{{asset('uploads/events/'.$event->image)}}" alt="">

                    <div class="date-container">
                        <div class="month">
                            <?php 
                                echo date("d F", strtotime($event->date));
                            ?>
                        </div>
                        <div class="year">
                            <?php 
                                echo date("Y", strtotime($event->date));
                            ?>
                        </div>
                    </div>

                    <div class="event-info">
                        <div class="meta-detail">
                            <span>
                                <i class="fas fa-clock"></i> {{$event->time}} | 
                                <i class="fa-solid fa-location-dot"></i> {{$event->location}}
                            </span>
                        </div>
                        <a href="{{url('event/'.$event->slug)}}">{{$event->name}}</a>
                    </div>
                </div>
            @empty
                
                <div class="text-center w-100">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-md-8 shadow-sm py-5 px-5">
                                <h5 class="text-danger">Looks Like, No Events have been scheduled at the moment</h5>
                                <a href="{{url('/')}}">Go to home page <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>             
                </div>

            @endforelse             

           </div>

           <div class="mt-5">
               {{$events->links()}}
           </div>
       </div>
   </div>
</section>
<!-- end of staff section -->



@endsection