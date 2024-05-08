@extends('layouts.admin')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">New Event</h5>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">events</li>
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
                        <span class="font-weight-bold">Add New Event</span>
                        
                        <a href="{{ url('admin/events') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Event List</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('addevent') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Event title*</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter event title" value="{{old('name')}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Event Time*</label>
                                        <input type="text" name="time" class="form-control" placeholder="Enter event time" value="{{old('name')}}">
                                        @error('time')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Event location*</label>
                                        <input type="text" name="location" class="form-control" placeholder="Enter event venue" value="{{old('name')}}">
                                        @error('location')
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
                                        <label>Event Date*</label>
                                        <input type="date" name="date" class="form-control">
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
                                        <label>Event Status*</label>
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
                                <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Save Event</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection