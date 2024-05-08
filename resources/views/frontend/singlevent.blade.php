@extends('layouts.app')


@section('content')




 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="{{url('/')}}">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Event</span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Details</span>
   </div>
</div>

<!-- event details -->
<section class="event-detail">
   <div class="container-wrapper">
       <div class="row">
           <div class="col-md-4">
               <h5>Event Detail</h5>

               <div class="details">
                   <table class="table table-borderless table-sm">
                       <tr>
                           <th><i class="fas fa-user-circle text-info"></i> Organizer :</th>
                           <td>Konne Backfield</td>
                       </tr>
                       <tr>
                           <th><i class="fas fa-calendar"></i> Start Date :</th>
                           <td>
                                <?php 
                                    echo date("d F", strtotime($event->date)).", ".date("Y", strtotime($event->date));
                                ?>
                           </td>
                       </tr>
                       <tr>
                           <th><i class="fas fa-clock"></i> Time :</th>
                           <td>{{$event->time}}</td>
                       </tr>
                       <tr>
                           <th><i class="fas fa-envelope"></i> Email :</th>
                           <td>info@example.com</td>
                       </tr>
                       <tr>
                           <th><i class="fas fa-phone"></i> Phone :</th>
                           <td>
                               +256 987 654 3210</td>
                       </tr>
                       <tr>
                           <th><i class="fa-solid fa-location-dot"></i> Address :</th>
                           <td>
                               {{$event->location}}
                           </td>
                       </tr>
                   </table>
               </div>

           </div>

           <div class="col-md-8">
               <div class="event-info">
                   <div class="meta-detail">
                       <span class="text-info">
                           <i class="fas fa-clock"></i> {{$event->time}} | 
                           <i class="fa-solid fa-location-dot"></i> {{$event->location}}
                       </span>
                   </div>
                   <h2 class="event-title">{{$event->name}}</h2>

                   <img src="{{asset('uploads/events/'.$event->image)}}" width="100%" alt="event-page">
               </div>

               <div class="event-text">
                   {!! $event->description !!}
               </div>
           </div>
       </div>
   </div>
</section>

<!-- end of event details -->


@endsection