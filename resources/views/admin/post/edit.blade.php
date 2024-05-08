@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">Edit News Post</h5>
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
                        <span class="font-weight-bold">Edit News Post</span>
                        <a href="{{ url('admin/posts') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Post List</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/post/update/'.$post->id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Post Title*</label>
                                        <input type="text" name="name" class="form-control" value="{{$post->name}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>                                   

                                    <div class="form-group">
                                        <label>Short description*</label>
                                        <textarea name="short_description" class="form-control" cols="30" rows="5" >{{$post->short_description}}</textarea>
                                        @error('short_description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Long description*</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="5">{{$post->description}}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Update Post</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category*</label>
                                        <select class="custom-select" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}" {{$post->category_id == $category->id ? "selected":""}}>{{$category->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Feature Image*</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            
                                        </div>
                                        <img src="{{asset('uploads/posts/'.$post->image)}}" width="100%" height="230px" class="my-3 shadow-sm" style="object-fit:cover" alt="post-image">
                                    </div>


                                    <div class="form-group">
                                        <label>Post Status*</label>
                                        <select class="custom-select" name="status">
                                            <option value="1" {{$post->status == '1' ? 'selected':''}}>Published</option>
                                            <option value="0" {{$post->status == '0' ? 'selected':''}}>Draft</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection