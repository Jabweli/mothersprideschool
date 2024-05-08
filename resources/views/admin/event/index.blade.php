@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Events</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Events</li>
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
                        <span class="font-weight-bold fs-3">Events Table</span>
                        
                        <a href="{{ url('admin/event/create') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Event</a>   
                        
                        
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Image</th>
                              <th>Event Title</th>                      
                              <th>Date</th>
                              <th>Start Time</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($events as $event)
                                <tr>
                                  <td>{{$event->id}}</td>
                                  <td>
                                    <img src="{{asset('uploads/events/'.$event->image)}}" width="100px" height="60px" style="object-fit:cover" alt="event-image">
                                  </td>
                                  <td>
                                    <a href="{{url('event/'.$event->slug)}}" target="_blank">
                                      {{$event->name}}
                                    </a>
                                  </td>
                                  
                                  <td>{{$event->date}}</td>
                                  <td>{{$event->time}}</td>
                                  <td>{{$event->status == '1' ? 'Published':'Draft'}}</td>
                                  <td>
                                    <a href="{{url('admin/event/edit/'.$event->id)}}" class="btn btn-sm btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('admin/event/delete/'.$event->id)}}" onclick="return confirm('Are you sure to delete this product? It cannot be undone')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                            @empty
                                <h6 class="text-center text-danger">No Events Found!</h6>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="pl-3">
                      {{$events->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection