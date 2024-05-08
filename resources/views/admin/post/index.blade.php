@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">News Posts</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">News posts</li>
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
                        
                        <a href="{{ url('admin/post/create') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Post</a>
                        
                        <a href="{{ url('admin/post/comments') }}" class="btn btn-sm btn-info float-right mr-2"><i class="fas fa-user-cog"></i> Comments</a>
                        <a href="{{ url('admin/categories') }}" class="btn btn-sm btn-warning float-right mr-2"><i class="fas fa-tags"></i> Categories</a>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Image</th>
                              <th>Post Title</th>                      
                              <th>Category</th>
                              <th>Status</th>
                              <th>Created_at</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($posts as $post)
                                <tr>
                                  <td>{{$post->id}}</td>
                                  <td>
                                    <img src="{{asset('uploads/posts/'.$post->image)}}" width="100px" height="60px" style="object-fit:cover" alt="post-image">
                                  </td>
                                  <td style="width: 300px">
                                    <a href="{{url('post/'.$post->category->slug.'/'.$post->slug)}}" target="_blank">
                                      <?php 
                                        if(strlen($post->name)>=10){
                                            $title = substr($post->name, 0, 35);
                                            echo $title."...";
                                        }
                                      ?>
                                    </a>
                                  </td>
                                  
                                  <td>{{$post->category->name}}</td>
                                  <td>
                                    <span class="badge {{$post->status == '1' ? 'badge-success':'badge-secondary'}}">{{$post->status == "1" ? 'Published': 'Draft'}}</span>
                                  </td>
                                  <td>{{$post->created_at}}</td>
                                  <td>
                                    <a href="{{url('admin/post/edit/'.$post->id)}}" class="btn btn-sm btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('admin/post/delete/'.$post->id)}}" onclick="return confirm('Are you sure to delete this post? It cannot be undone')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                            @empty
                                <h6 class="text-center text-danger">No Posts Added!</h6>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="pl-3">
                      {{$posts->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection