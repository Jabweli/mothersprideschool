@extends('layouts.admin')

@section('content')


    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">Categories</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Categories</li>
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
                        <span>Edit Category</span>
                        <a href="{{url('admin/categories')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Category List</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/category/update/'.$category->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            
                            <div class="form-group">
                                <p class="font-weight-bold">Category Name*</p>
                                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p class="font-weight-bold">Slug*</p>
                                <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                @error('slug')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <p class="font-weight-bold">Description</p>
                                <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Short description">{{$category->description}}</textarea>
                                @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <span class="font-weight-bold">Active
                                    <input type="checkbox" name="active" {{$category->status == '1' ? 'checked':''}}>
                                    @error('status')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </span>

                                <span class="font-weight-bold ml-5">Navbar Status
                                    <input type="checkbox" name="navbar" {{$category->navbar == '1' ? 'checked':''}}>
                                    @error('navbar')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </span>
                            </div>
                            
                            <div class="modal-footer justify-content-between">
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection