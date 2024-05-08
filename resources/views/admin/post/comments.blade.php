@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Blog Posts</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Blog posts</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <span class="font-weight-bold fs-3">Post Table</span>
                        
                        {{-- <a href="{{ url('admin/post/create') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Post</a> --}}
                        
                        {{-- <a href="{{ url('admin/post/comments') }}" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-user-cog"></i> Comments</a> --}}
                        {{-- <a href="{{ url('admin/banner-posts') }}" class="btn btn-sm btn-warning float-right mr-2"><i class="fas fa-edit"></i> Banner Post</a> --}}
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Post</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
    
                            <tbody>
                                <?php $sn = 1; ?>
                                @forelse ($comments as $comment)
                                    <tr>
                                        <td>{{$sn++}}</td>
                                        <td>
                                            <a target="_blank" href="{{url('post/'.$comment->post->category->slug.'/'.$comment->post->slug)}}">
                                                <?php 
                                                    if(strlen($comment->post->name)>15){
                                                        $title = substr($comment->post->name, 0, 15);
                                                        echo $title."...";
                                                    }
                                                ?>
                                            </a>
                                        </td>
                                        <td>{{$comment->name}}</td>
                                        <td>{{$comment->email}}</td>
                                        <td>
                                            {{$comment->comment}}
                                        </td> 
                                        <td>{{$comment->status == '0'? 'Pending':'Approved'}}</td>
                                        <td>
                                            @if ($comment->status == '0')
                                                <a href="{{ url('admin/comment/approve/'.$comment->id)}}" class="btn btn-success btn-sm text-white">Approve</a>
    
                                            @else
                                                <a href="{{ url('admin/comment/disaprove/'.$comment->id)}}" class="btn btn-warning btn-sm text-white">Disaprove</a>
                                            @endif
                                            
                                            <a href="{{ url('admin/comment/delete/'.$comment->id)}}" onclick="return confirm('Are you sure you want to delete this comment?')" class="btn btn-danger btn-sm text-white">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="text-center w-100">
                                        <h5 class="text-center">No Posts Found!</h5>  
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="pl-3">
                      {{$comments->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection