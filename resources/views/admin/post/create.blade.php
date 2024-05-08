@extends('layouts.admin')

@section('content')
<div class="modal fade" id="modal-lg">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title font-weight-bold"><i class="fas fa-tags"></i> Add New Category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('storeCategory') }}" method="post">
            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label>Category Name*</label>
                    <input type="text" name="name" class="form-control" placeholder="Category..." value="{{old('name')}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Slug*</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter slug" value="{{old('slug')}}">
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Short description">{{old('description')}}</textarea>
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <span class="font-weight-bold">Active
                        <input type="checkbox" name="active" value="{{old('status')}}">
                        @error('status')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Category</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">New Post</h5>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">news post</li>
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
                        <span class="font-weight-bold">Add News Post</span>
                        <a href="{{ url('admin/posts') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To News List</a>
                        <a href="#" data-toggle="modal" data-target="#modal-lg" class="btn btn-sm btn-warning float-right mr-2"><i class="fas fa-tags"></i> Add New Category</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('addpost')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>News Title*</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter post title" value="{{old('name')}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Short description*</label>
                                        <textarea name="short_description" class="form-control" cols="30" rows="5" placeholder="Enter short post description">{{old('short_description')}}</textarea>
                                        @error('short_description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Long description*</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="5">{{old('long_description')}}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Category*</label>
                                        <select class="custom-select" name="category_id">
                                            <option>Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                        @error('category_id')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                
                                    <div class="form-group">
                                        <label>Feature Image*</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" value="{{old('image')}}" onchange="getImage(event)" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <img src="{{asset('assets/images/banners/placeholder.png')}}" alt="preview image" id="preview-image" width="100%" height="250px" class="my-3" style="object-fit:cover">
                                    </div>


                                    <div class="form-group">
                                        <label>News Status*</label>
                                        <select class="custom-select" name="status">
                                            <option value="1">Published</option>
                                            <option value="0">Draft</option>
                                        </select>
                                        @error('status')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Save Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection