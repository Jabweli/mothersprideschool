@extends('layouts.admin')

@section('content')

  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">Profile</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">profile</li>
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
                        <h5>Change Password
                            <a href="{{ url('admin/profile') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To User List</a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <form action="{{url('admin/password/update/'.$profile->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" value="{{$profile->id}}">
                                    <label for="name">Current Password</label>
                                    <input type="password" id="name" name="old_password" class="form-control" placeholder="Enter current password">
                                    @error('old_password')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">New Password</label>
                                    <input type="password" id="name" name="password" class="form-control" placeholder="Enter new password">
                                    @error('password')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="name">Confirm Password</label>
                                    <input type="password" id="name" name="password_confirmation" class="form-control" placeholder="Confirm new password">
                                    @error('password_confirmation')
                                        <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>

            

                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update Password</button>
                                    
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection