@extends('layouts.admin')

@section('content')

  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">User List</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">users</li>
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
                        <h5>User List</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Profile image</th>
                                        <th>User name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($profiles as $profile)
                                        <tr>
                                            <td>{{$profile->id}}</td>
                                            <td><img src="{{asset('uploads/profile/'.$profile->image)}}" class="rounded-circle" width="60px" height="60px" alt="profile image"></td>
                                            <td>{{$profile->name}}</td>
                                            <td>{{$profile->email}}</td>
                                            <td>
                                                <span>{{$profile->role_as == '1' ? 'Admin':'User'}}</span>
                                            </td>
                                            <td>
                                                <a class="text-success" href="{{url('admin/profile/edit/'.$profile->id)}}"><i class="fas fa-edit"></i></a>
                                                <a class="text-danger btn {{ $profile->role_as == '1' ? 'disabled':''}}" href="{{url('admin/profile/delete/'.$profile->id)}}" onclick="return confirm('Are you sure you want to delete this user? You won\'t be able to undo')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection