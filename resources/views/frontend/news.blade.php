@extends('layouts.app')

@section('content')



 <!-- page banner section -->
 <div class="pg-banner">
</div>

<div class="pg-breadcrumb">
   <div class="container-wrapper my-3">
       <span><a href="#">Home</a></span>
       <span class="text-primary"><i class="fas fa-caret-right"></i></span>
       <span class="text-primary">School News</span>
   </div>
</div>

<!-- staff section -->
<section id="teachers" class="staff">
   <div class="general-heading">
       <h4>SCHOOL NEWS</h4>
       <h2>Get to know what's happening</h2>
       <p>
           We have an excellent teacher to child ratio at our nursery & primary level 
           to ensure that each child receives the attention he or she needs.
       </p>
       <img src="assets/images/icons/image-bee.webp" alt="">
   </div>

   <div class="news-section">
       <div class="container-wrapper">
           <div class="wrapper">
                @forelse ($posts as $post)
                    <div class="styled-post-box">
                        <img src="{{asset('uploads/posts/'.$post->image)}}" alt="">

                        <div class="post-info">
                            <span class="category-tag"><a href="#" class="text-white">{{$post->category->name}}</a></span>
                            <h2 class="post-title">
                                <a href="{{url('news/'.$post->slug)}}">
                                    <?php 
                                        if(strlen($post->name)>=15){
                                            $title = substr($post->name, 0, 45);
                                            echo $title."...";
                                        }
                                    ?>
                                </a>
                            </h2>
                            <p class="short_desc">
                                <?php 
                                    if(strlen($post->short_description)>=15){
                                        $title = substr($post->short_description, 0, 50);
                                        echo $title."...";
                                    }
                                ?>
                            </p>
                            <div class="meta-details">
                                <span>
                                    <?php 
                                        echo date("d F", strtotime($post->created_at)) .", ".date("Y", strtotime($post->created_at));
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                @empty

                <div class="text-center w-100">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-md-8 shadow-sm py-5 px-5">
                                <h5 class="text-danger">No News has been added at the moment</h5>
                                <a href="{{url('/')}}">Go to home page <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                    
                    
                @endforelse
                
               

               {{-- <div class="styled-post-box">
                   <img src="assets/images/school/teacher-1.jpg" alt="">

                   <div class="post-info">
                       <span class="category-tag"><a href="#" class="text-white">Camping</a></span>
                       <h2 class="post-title"><a href="#">School Academic Camping</a></h2>
                       <p class="short_desc">
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       </p>
                       <div class="meta-details">
                           <span>John Doe</span>
                           <span class="float-end">
                               April 13, 2023
                           </span>
                       </div>
                   </div>
               </div>

               <div class="styled-post-box">
                   <img src="assets/images/school/teacher-1.jpg" alt="">

                   <div class="post-info">
                       <span class="category-tag"><a href="#" class="text-white">Camping</a></span>
                       <h2 class="post-title"><a href="#">School Academic Camping</a></h2>
                       <p class="short_desc">
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       </p>
                       <div class="meta-details">
                           <span>John Doe</span>
                           <span class="float-end">
                               April 13, 2023
                           </span>
                       </div>
                   </div>
               </div>

               <div class="styled-post-box">
                   <img src="assets/images/school/teacher-1.jpg" alt="">

                   <div class="post-info">
                       <span class="category-tag"><a href="#" class="text-white">Camping</a></span>
                       <h2 class="post-title"><a href="#">School Academic Camping</a></h2>
                       <p class="short_desc">
                           Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                       </p>
                       <div class="meta-details">
                           <span>John Doe</span>
                           <span class="float-end">
                               April 13, 2023
                           </span>
                       </div>
                   </div>
               </div> --}}

           </div>

           <!-- <div class="mt-5">
               {{-- {{$posts->links()}} --}}
           </div> -->
       </div>
   </div>
</section>
<!-- end of staff section -->


@endsection