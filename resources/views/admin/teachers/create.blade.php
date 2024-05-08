@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">New Teacher</h5>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">teacher</li>
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
                        <span class="font-weight-bold">Add Teacher</span>
                        <a href="{{ url('admin/teachers') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Teachers List</a>
                        
                    </div>

                    <div class="card-body">
                        <form action="{{ route('addteacher')}}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Teacher Name*</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter teacher's name" value="{{old('name')}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Subject*</label>
                                        <input type="text" name="subject" class="form-control" placeholder="Enter main subject" value="{{old('subject')}}">
                                        @error('subject')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Class*</label>
                                        <input type="text" name="class" class="form-control" placeholder="Enter teacher class" value="{{old('class')}}">
                                        @error('class')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Phone*</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter teacher phone number" value="{{old('phone')}}">
                                        @error('phone')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter teacher email" value="{{old('email')}}">
                                        @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>School Branch*</label>
                                        <select name="address" class="form-control">
                                            <option value="">Select school branch</option>
                                            <option value="Gulaama">Gulaama</option>
                                            <option value="Ham-Mukasa">Ham-Mukasa</option>
                                            <option value="Kasangalabi">Kasangalabi</option>
                                        </select>
                                        {{-- <input type="text" name="address" class="form-control" placeholder="Enter teacher's school branch" value="{{old('address')}}"> --}}
                                        @error('address')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                
                                    <div class="form-group">
                                        <label>Teacher Image*</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image" value="{{old('image')}}" onchange="getImage(event)" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <img src="{{asset('assets/images/banners/placeholder.png')}}" alt="preview image" id="preview-image" width="100%" height="250px" class="my-3" style="object-fit:cover">
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Save Teacher</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection