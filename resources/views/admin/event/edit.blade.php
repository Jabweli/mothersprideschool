@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">Edit Event</h5>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">event</li>
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
                        <span class="font-weight-bold">Edit Event</span>
                        <a href="{{ url('admin/events') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Event List</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/event/update/'.$event->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Event Title*</label>
                                        <input type="text" name="name" class="form-control" value="{{$event->name}}">
                                        @error('name')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Event time*</label>
                                        <input type="text" name="time" class="form-control" value="{{$event->time}}">
                                        @error('time')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Event location*</label>
                                        <input type="text" name="location" class="form-control" value="{{$event->location}}">
                                        @error('location')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Long description*</label>
                                        <textarea name="description" id="summernote" class="form-control" cols="30" rows="5">{{$event->description}}</textarea>
                                        @error('description')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Update Event</button>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" name="date" value="{{$event->date}}">
                                        @error('date')
                                            <small class="text-danger">{{$message}}</small>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>Event Image*</label>
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                            @error('image')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                            
                                        </div>
                                        <img src="{{asset('uploads/events/'.$event->image)}}" width="100%" height="230px" class="my-3 shadow-sm" style="object-fit:cover" alt="event-image">
                                    </div>

                                
                                    <div class="form-group">
                                        <label>Event Status*</label>
                                        <select class="custom-select" name="status">
                                            <option value="1" {{$event->status == '1' ? 'selected':''}}>Published</option>
                                            <option value="0" {{$event->status == '0' ? 'selected':''}}>Draft</option>
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