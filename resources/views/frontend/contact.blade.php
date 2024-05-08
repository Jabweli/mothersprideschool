@extends('layouts.app')

@section('content')
    
 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Contact</span>
   </div>
</div>



<!-- welcome info -->
<section class="contact-page-info">
   <div class="container-wrapper">
       <div class="row g-3">
           <div class="col-md-4">
               <img src="assets/images/main/img_1.jpg" alt="school image" class="school-image">
           </div>
           <div class="col-md-4">
               <h4 class="title">
                   Welcome to the Mother's Pride primary & nursery School mukono
               </h4>

               <h4 class="text-primary">+256 (0) 752 582 368</h4>

               <h5 class="title">School Locations</h5>
               <ul>
                    <li>Plot 851, Seeta Gulaama - Mukono</li>
                    <li>Plot 2329 - Along Elizabeth Nantezza Road, Ham Mukasa Village </li>
                    <li>Kasangalabi Village In Mukono</li>
               </ul>


               <h5 class="title">School Contact Info</h5>
                <p><span><i class="fas fa-envelope text-success"></i> <a href="mailto:mothersprideprimarynursery@gmail.com" class="text-lowercase">mothersprideprimarynursery@gmail.com</a></span></p>
                <p><span><i class="fas fa-tablet text-success"></i> +256 (0) 779 582 368</span></p>
           </div>
           <div class="col-md-4">
               <div class="working-hours p-3">
                   <h5>Working Hours</h5>
                   <table class="table table-bordered">
                       <tr>
                           <td>Monday - Friday</td>
                           <td>8:00 AM - 6:00PM</td>
                       </tr>
                       <tr>
                           <td>Saturday</td>
                           <td>9:00 AM - 3:00PM</td>
                       </tr>
                       <tr>
                           <td>Sunday</td>
                           <td>CLOSED</td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
   </div>
</section>


{{-- <section class="staff-contact-details">
   <div class="container-wrapper">
       <div class="wrapper">
           <div class="contact-box">
               <img src="assets/images/school/image-fcb-1.webp" alt="staff image">
               <div class="contact-text">
                   <span class="name">Mark Potter <span class="badge bg-info">Info</span></span><br>
                   <span class="des">PRINCIPAL</span><br>
                   <a href="#">ed@office-school.com</a>
               </div>
           </div>

           <div class="contact-box">
               <img src="assets/images/school/image-fcb-1.webp" alt="staff image">
               <div class="contact-text">
                   <span class="name">Mark Potter <span class="badge bg-info">Info</span></span><br>
                   <span class="des">PRINCIPAL</span><br>
                   <a href="#">ed@office-school.com</a>
               </div>
           </div>

           <div class="contact-box">
               <img src="assets/images/school/image-fcb-1.webp" alt="staff image">
               <div class="contact-text">
                   <span class="name">Mark Potter <span class="badge bg-info">Info</span></span><br>
                   <span class="des">PRINCIPAL</span><br>
                   <a href="#">ed@office-school.com</a>
               </div>
           </div>

           <div class="contact-box">
               <img src="assets/images/school/image-fcb-1.webp" alt="staff image">
               <div class="contact-text">
                   <span class="name">Mark Potter <span class="badge bg-info">Info</span></span><br>
                   <span class="des">PRINCIPAL</span><br>
                   <a href="#">ed@office-school.com</a>
               </div>
           </div>

       </div>
   </div>
</section> --}}





<div class="container-wrapper mt-5">
   <div class="general-heading">
       <h4>CONTACT US</h4>
       <h2>Leave Us a message</h2>
       <p>
           We shall be glad to hear from you and offer complete guidance on any information
           or query you may have
       </p>
       <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="bee-icon">
   </div>

   <form action="{{ route('submitForm') }}" method="POST" class="contact-form row g-3 border shadow-sm">

        @csrf

       <div class="col-md-12">
           <label for="name">Full Name*</label>
           <input type="text" name="name" placeholder="Enter your full name" value="{{old('name')}}" class="form-control">
           @error('name')
                <small style="color: red">{{$message}}</small> 
            @enderror
       </div>
       <div class="col-md-12">
           <label for="name">Your Email*</label>
           <input type="email" name="email" placeholder="Enter your email" value="{{old('email')}}" class="form-control">
           @error('email')
                <small style="color: red">{{$message}}</small> 
            @enderror
       </div>
       <div class="col-md-12">
           <label for="name">Your Phone*</label>
           <input type="text" name="phone" placeholder="Enter your working phone number" value="{{old('phone')}}" class="form-control">
           @error('phone')
                <small style="color: red">{{$message}}</small> 
            @enderror
       </div>
       <div class="col-md-12">
           <label for="name">Subject*</label>
           <input type="text" name="subject" placeholder="Enter subject" value="{{old('subject')}}" class="form-control">
           @error('subject')
                <small style="color: red">{{$message}}</small> 
            @enderror
       </div>
       <div class="col-md-12">
           <label for="msg">Your Message*</label>
           <textarea name="message" id="msg" cols="30" rows="5" class="form-control" placeholder="Write your message">{{old('message')}}</textarea>
           @error('message')
                <small style="color: red">{{$message}}</small> 
            @enderror
       </div>
       <div class="col-md-12">
           <button class="btn btn-primary">Send Message</button>
       </div>
   </form>
   
</div>
<!-- end of contact info -->



<section>
    <div class="container-fluid">
        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d11284.689624855639!2d32.71532190256723!3d0.358364590010091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m5!1s0x177db808d08151a7%3A0xb6601d818ad3f106!2sSeeta!3m2!1d0.36692349999999996!2d32.7124903!4m3!3m2!1d0.3546072!2d32.7301827!5e0!3m2!1sen!2sug!4v1685969386093!5m2!1sen!2sug" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>



@endsection