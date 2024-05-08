@extends('layouts.app')

@section('content')


<div class="hero-section">
    <div class="container-wrapper">
        <div class="row d-flex align-center justify-content-center mt-4">
            <div class="col-md-10">
                <div class="single-post-container shadow-sm">
                    <span class="text-primary">Home <i class="fas fa-angle-right"></i> {{$post->category->name}}</span>
                    
                    <h1 class="post-title">{{$post->name}}</h1>
                    <div class="auth-container">

                        <div class="auth-info">
                            <span>
                                <?php 
                                    echo date("d F", strtotime($post->created_at)) .", ".date("Y", strtotime($post->created_at));
                                ?>
                            </span>
                            <span class="float-right">, Views: {{$post->view_count}}</span>
                        </div>
                    </div>
                    <img src="{{asset('uploads/posts/'.$post->image)}}" class="post-image" alt="post image">

                    

                    <div class="post-text">
                        {!! $post->description !!}

                        <div class="share-icons">
                            <span><i class="fas fa-share"></i></span>
                            <a href="{{$settings->facebook}}" class="fb"><i class="fab fa-facebook"></i> Facebook</a>
                            <a href="{{$settings->twitter}}" class="twit"><i class="fab fa-twitter"></i> Twitter</a>
                            <a href="{{$settings->instagram}}" class="whatsapp"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>



                {{-- <div class="comment-section mt-4 shadow-sm bg-white">
                    <div class="comment-fields mb-4">
                        <h4>Comments</h4>
    
                        @forelse ($post->comments as $comment)
                            @if ($comment->status == '1')
                                <div class="comment-fields-wrapper d-flex mt-3">
                                    <div class="user-avator">
                                        <img src="{{asset('assets/images/avator.png')}}" width="50px" class="rounded-circle" alt="profile_image">
                                    </div>
                                    <div class="user-info ml-3">
                                        <h6 class="user-name">{{$comment->name}}
                                            - <span class="date">{{$comment->created_at}}</span>
                                        </h6>
                                        
    
                                        <div class="user-comment">
                                            <p>
                                                {!! $comment->comment !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif                        
                        @empty
                            <h6>No comments found!</h6>
                        @endforelse
                    </div>


                    <p>To be published, comments must be reviewed by the administrator.*</p>
                    <a class="btn form-control" href="#demo" data-bs-toggle="collapse">Post a comment ({{$commentCount}})</a>

                    <div id="demo" class="collapse mt-4">
                        <form action="{{ url('comments/submit') }}" method="post" class="row g-3">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                            </div>

                            <div class="col-md-12">
                               <textarea name="comment" class="form-control" placeholder="Type comment" cols="30" rows="5"></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary form-control">Submit</button>
                            </div>
                        </form>
                    </div> 
                </div> --}}

            </div>

        </div>
    </div>
</div>


@endsection