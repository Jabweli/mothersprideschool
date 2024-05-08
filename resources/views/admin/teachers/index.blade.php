@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Teachers</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Teachers</li>
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
                        <span class="font-weight-bold fs-3">Teachers Table</span>
                        
                        <a href="{{ url('admin/teacher/create') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Teacher</a>                     
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Image</th>
                              <th>Teacher Name</th>                      
                              <th>Subject</th>
                              <th>Class</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($teachers as $teacher)
                                <tr>
                                  <td>{{$teacher->id}}</td>
                                  <td>
                                    <img src="{{asset('uploads/teachers/'.$teacher->image)}}" width="100px" height="60px" style="object-fit:cover" alt="teacher-image">
                                  </td>
                                  <td>
                                    {{$teacher->name}}
                                  </td>
                                  
                                  <td>{{$teacher->subject}}</td>
                                  <td>
                                    {{$teacher->class}}
                                  <td>{{$teacher->phone}}</td>
                                  <td>{{$teacher->email}}</td>
                                  <td>
                                    <a href="{{url('admin/teacher/edit/'.$teacher->id)}}" class="btn btn-sm btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('admin/teacher/delete/'.$teacher->id)}}" onclick="return confirm('Are you sure to delete this teacher data? It cannot be undone')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                            @empty
                                <h6 class="text-center text-danger">No teacher data Added!</h6>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="pl-3">
                      {{$teachers->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection