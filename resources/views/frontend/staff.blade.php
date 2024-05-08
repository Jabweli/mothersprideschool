@extends('layouts.app')

@section('content')



 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Staff</span>
   </div>
</div>

<!-- staff section -->
<section id="teachers" class="staff">
   <div class="general-heading">
       <h4>OUR STAFF</h4>
       <h2>our best esteemed staff</h2>
       <p>
           We have an excellent teacher to child ratio at our nursery & primary level 
           to ensure that each child receives the attention he or she needs.
       </p>
       <img src="assets/images/icons/image-bee.webp" alt="">
   </div>

   <div class="container">
       <div class="wrapper" id="teacher-wrapper">

           {{-- fetch teacher data --}}
            @foreach ($teachers as $teacher)
                <div class="teacher-box">
                    <div class="item-image">
                        <img src="{{asset('uploads/teachers/'.$teacher->image)}}" alt="teacher">
                    </div>
                    <div class="teacher-info">
                        <h3>
                            {{$teacher->subject}}
                        </h3>
                        {{-- <p>{{$teacher->subject}} Teacher</p> --}}
                    </div>
                </div>
            @endforeach

       </div>

       <div class="mt-5">
        {{$teachers->links()}}
       </div>
       
   </div>
</section>


@endsection