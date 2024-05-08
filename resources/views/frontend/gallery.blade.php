@extends('layouts.app')

@section('content')



 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Gallery</span>
   </div>
</div>

<!-- staff section -->
<section id="gallery" class="gallery">
   <div class="general-heading">
       <h4>GALLERY</h4>
       <h2>Our collection of images</h2>
       <p>
           We have an excellent teacher to child ratio at our nursery & primary level 
           to ensure that each child receives the attention he or she needs.
       </p>
       <img src="assets/images/icons/image-bee.webp" alt="">
   </div>

   <div class="container-wrapper">
       <!-- Images used to open the lightbox -->
       <div class="gallery-wrapper">
            @php
               $sn = 1; 
            @endphp
            @foreach ($images as $image)
                <img src="{{$image->image}}" onclick="openModal();currentSlide({{$sn++}})" class="hover-shadow">
            @endforeach
       </div>
 
       <!-- The Modal/Lightbox -->
       <div id="myModal" class="modal">
               <span class="close cursor" onclick="closeModal()">&times;</span>
               <div class="modal-content">

                    @foreach ($images as $image)
                        <div class="mySlides">
                            {{-- <div class="numbertext">{{$sn++}} / {{$imageCount}}</div> --}}
                            <img src="{{$image->image}}" alt="gallery-image">
                        </div>
                    @endforeach
                   
               
                      
                   <!-- Next/previous controls -->
                   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                   <a class="next" onclick="plusSlides(1)">&#10095;</a>
               
               </div>
       </div>     
   </div>
</section>
<!-- end of staff section -->


@endsection