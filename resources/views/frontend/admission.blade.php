@extends('layouts.app')


@section('content')



 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Academics</span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">Admissions</span>
   </div>
</div>


<!-- facility section -->
<div class="admissions">
   <div class="container">
       <div class="general-heading">
           <h4>ADMISSION</h4>
           <h2>admission process</h2>
           <p>
               We are currently accepting applications for all levels, Nursery & primary for
               the 2023—24 academic year.
           </p>
           <img src="assets/images/icons/image-bee.webp" alt="bee-icon">
       </div>


       <div class="admission-container">
           <div class="wrapper">
               <div class="admission-box">
                   <img src="assets/images/icons/sm-book.png" alt="books-icon">

                   <div class="admission-info">
                       <h3>Request Info</h3>
                       <p>
                           Contact us for more information regarding the application process,
                           we shall get back to you.
                       </p>
                       <a href="{{url('contact')}}">Request Info <i class="fas fa-long-arrow-right"></i></a>
                   </div>
               </div>

               <div class="admission-box">
                   <img src="assets/images/icons/sm-book.png" alt="books-icon">

                   <div class="admission-info">
                       <h3>Apply</h3>
                       <p>
                           Download, read carefully and fill in the application forms below. After proceed
                           to submit the form.
                       </p>
                       <a href="{{url('/file-download')}}">Download form <i class="fas fa-long-arrow-right"></i></a>
                   </div>
               </div>

               <div class="admission-box">
                   <img src="assets/images/icons/sm-book.png" alt="books-icon">

                   <div class="admission-info">
                       <h3>submit form</h3>
                       <p>
                           After filling in the form you can come back and submit it here 
                           or hand deliver to any of our offices.
                       </p>
                       <a href="#">Submit form <i class="fas fa-long-arrow-right"></i></a>
                   </div>
               </div>
           </div>
       </div>


       <div class="school-requirements mt-5">
           <h3>School Requirements</h3>

           <div class="row">
               <div class="col-md-4 mt-3">
                   <div class="requirements-box">
                       <h5>Nursery Requirements</h5>
                       <a href="{{url('/download/nursery-requirements')}}"><i class="fas fa-file-pdf"></i> Download Form</a>
                   </div>
                   
               </div>

               <div class="col-md-4 mt-3">
                   <div class="requirements-box">
                        <h5>Primary Requirements</h5>
                        <a href="{{url('/download/primary-requirements')}}"><i class="fas fa-file-pdf"></i> Download Form</a>
                   </div>
               </div>

               <div class="col-md-4 mt-3">
                    <div class="requirements-box">
                        <h5>Boarding Requirements</h5>
                        <a href="{{url('/download/boarding-requirements')}}"><i class="fas fa-file-pdf"></i> Download Form</a>
                    </div>
                </div>
           </div>
       </div>


       <div class="admission-contact my-5">
           <h3>Contact our admissions office</h3>

           <div class="row mt-3">
               <div class="col-md-4 mt-3">
                   <div class="dean-box">
                       <div class="dean-img">
                           <img src="{{asset('assets/images/main/director.jpg')}}" alt="staff-image">
                       </div>
                       

                       <div class="dean-info">
                           <span class="des-info">For the Foundation Stage contact</span class="des-info">
                           <h4>Ms. Teddy Nyamwenge</h4>
                           <span class="span-text"><i class="fas fa-tablet"></i> +256 779 582 368</span><br>
                           <span class="span-text"><i class="fas fa-tablet"></i> +256 752 582 368</span><br>
                       </div>

                   </div>
               </div>

               <div class="col-md-8 mt-3">
                   <form action="{{ route('submitForm') }}" method="POST">
                        @csrf

                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group mb-3">
                                   <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Full Name*">
                                   @error('name')
                                        <small style="color: red">{{$message}}</small> 
                                   @enderror
                               </div>

                               <div class="form-group mb-3">
                                   <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Email*">
                                   @error('email')
                                        <small style="color: red">{{$message}}</small> 
                                   @enderror
                               </div>

                               <div class="form-group mb-3">
                                   <input type="text" name="phone" class="form-control" value="{{old('phone')}}" placeholder="Phone*">
                                   @error('phone')
                                        <small style="color: red">{{$message}}</small> 
                                   @enderror
                               </div>

                               <button type="submit" class="btn btn-primary form-control btn-sm desktop-btn">Submit</button>
                           </div>

                           <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <input type="text" name="subject" class="form-control" value="{{old('subject')}}" placeholder="Subject*">
                                    @error('subject')
                                        <small style="color: red">{{$message}}</small> 
                                    @enderror
                                </div>

                               <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Message*">{{old('message')}}</textarea>
                               @error('message')
                                    <small style="color: red">{{$message}}</small> 
                                @enderror
                               <button type="submit" class="btn btn-primary form-control btn-sm mobile-btn mt-3">Submit</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
<!-- end of facility section -->




@endsection