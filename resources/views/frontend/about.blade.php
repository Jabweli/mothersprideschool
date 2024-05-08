@extends('layouts.app')


@section('content')


 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">About</span>
   </div>
</div>



<!-- about section -->


<section class="about about-page" id="about">
   <div class="container-wrapper">
       <div class="wrapper">
           <div class="about-info-container">
               <div class="heading">
                   <h4>About us</h4>
                   <h2>
                       Welcome To Mother's Pride primary & nursery school mukono</h2>
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
                        Mother’s pride has a lot to offer your child. Priority is given to 
                        learning but pupils participate in a wide range of school life activities
                         developing the qualities and values that will lead to their personal 
                         success.
                    </p>

                    <P>
                        Teaching and learning to be effective and meaningful involves a partnership between the child, 
                        teacher and parent/ guardian. We should work together, striving for the best 
                        educational and social progress of our children. 
                    </P>

                    <P>
                        We anticipate our parent's involvement 
                        in school activities, in parent – teacher meetings, in supervision, homework and 
                        helping to ensure that it is done on time, presentably to the fullest potential of the child.
                    </P>


                   <div class="mission-text">
                       <h3>Guiding The Young Generation To Success.</h3>
                       <p>
                           Since we started operation, our goal has been to provide quality 
                           early childhood & primary education through our programs. Our primary focus is the 
                           wellbeing of every child. We provide our children the attention 
                           they need to grow and develop into happy, healthy people and be 
                           confident for school.
                       </p>
                       <div class="row">
                           <div class="col-md-6">
                               <h5>our mission</h5>
                               <p>
                                   To provide a safe, disciplined learning environment 
                                   that empowers all pupils to develop their full potential.
                               </p>
                           </div>
                           <div class="col-md-6">
                               <h5>our vission</h5>
                               <p>
                                   To provide a safe, secure and happy environment where children are free
                                   to explore, play and learn.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="about-image">
               <img src="{{asset('assets/images/main/about.jpg')}}" class="lg-image" alt="about-school-image">

               <div class="row">
                <div class="col-md-6 mt-3">
                    <img src="{{asset('assets/images/main/branch3.jpg')}}" class="small-image" alt="">
                </div>
                <div class="col-md-6 mt-3">
                    <img src="{{asset('assets/images/main/img_1.jpg')}}" class="small-image" alt="">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mt-3">
                    <img src="{{asset('assets/images/main/playground2.jpg')}}" class="small-image" alt="">
                </div>
                <div class="col-md-6 mt-3">
                    <img src="{{asset('assets/images/main/van2.jpg')}}" class="small-image" alt="">
                </div>
            </div>

           </div>
       </div>
   </div>
</section>

<!-- end of about section -->




<!-- mission section -->
<section class="mission" id="mission">
   <div class="container">
       <div class="wrapper">
           <div class="mission-img">
               <img src="{{asset('assets/images/school/banner-1.png')}}" alt="">
           </div>
           <div class="mission-text">
               <h2>Objectives of Mother's Pride primary & nursery school mukono</h2>
               <p>
                   Our primary focus is the 
                   wellbeing of every child. We provide our children the attention 
                   they need to grow and develop into happy, healthy people and be 
                   confident for school.
               </p>

               <div class="objectives">
                   <ul>
                       <li>
                           To ensure that children recieve individual attention and affection
                       </li>
                       <li>
                           To train children to develop satisfying relationship with other children and adults.
                       </li>
                       <li>
                           To train children to develop lasting self-discipline.
                       </li>
                       <li>
                           To work in partnership with parents to promote the welfare, care and learning of the
                           individual children and to keep parents informed aboot their child's activities and progress
                           plus events at the school, informally in conversation and formally through documentation.
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</section>
<!-- end of mission section -->



<!-- facility section -->
<div class="facilities">
   <div class="container">
       <div class="general-heading">
           <h4>FACILITIES</h4>
           <h2>Our school facilities</h2>
           <p>With Mother's Pride, we always put the quality of 
               teaching children first, please rest assured
               when sending children at Mother's Pride.
           </p>
           <img src="{{asset('assets/images/icons/image-bee.webp')}}" alt="">
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
                   <img src="assets/images/icons/sm-restaurant.png" alt="restaurant.png">

                   <div class="facility-text">
                       Snacks, breakfast porridge and lunch
                   </div>
               </div>

               <div class="facility-box">
                   <img src="assets/images/icons/icon-accordion-4.webp" alt="">

                   <div class="facility-text">
                       Best qualified teaching and non-teaching staff
                   </div>
               </div>

               <div class="facility-box">
                   <img src="assets/images/icons/sm-heart.png" alt="heart-icon">

                   <div class="facility-text">
                       Equipped Sickbay with registered nurse 
                   </div>
               </div>

               <div class="facility-box">
                   <img src="assets/images/icons/sm-paint.png" alt="paint-icon">

                   <div class="facility-text">
                       Quite environment free from dust and with security .
                   </div>
               </div>

               <div class="facility-box">
                   <img src="assets/images/icons/sm-book.png" alt="book-icon">

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
       <img src="assets/images/icons/image-bee.webp" alt="bee-icon">
   </div>

   <div class="container">
       <div class="card-wrapper">
           <div class="card-box">
               <img src="assets/images/main/play.jpg" alt="children playing">

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
               <img src="assets/images/main/teacher.jpg" alt="teacher">

               <h3>Great Teachers</h3>
               <p>
                   Experienced and dedicated teachers team will help 
                   your child develop more in all aspects.
               </p>
           </div>
           <div class="card-box">
               <img src="assets/images/main/env.jpg" alt="school building">

               <h3>
                   Conducive Environment
               </h3>
               <p>
                   The colorful environment at Mother's pride is 
                   suitable for children 's age, making them more comfortable.
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