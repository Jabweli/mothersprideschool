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
                        <h5>User Profile
                            <a href="{{ url('admin/profile') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To User List</a>
                        </h5>
                    </div>

                    <div class="card-body">
                        <form action="{{url('admin/profile/update/'.$profile->id)}}" method="post" class="row g-3" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')


                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="hidden" value="{{$profile->id}}">
                                    <label for="name">Username</label>
                                    <input type="text" id="name" name="name" class="form-control" value="{{$profile->name}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="name">User email</label>
                                    <input type="email" id="name" name="email" class="form-control" value="{{$profile->email}}" readonly>
                                </div>

                                <div class="form-group">
                                    <label>User role</label>
                                    <select name="role_as" id="" class="form-control">
                                        <option value="1" {{ $profile->role_as == '1' ? 'selected':""}}>Admin</option>
                                        <option value="0" {{ $profile->role_as == '0' ? 'selected':""}}>User</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="name">Profile Image</label>
                                    <input type="file" id="name" name="image" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="description">User description</label>
                                    <textarea name="description" class="form-control" id="description" cols="30" rows="5">{{$profile->description}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update Profile</button>
                                    <a href="{{url('admin/password/'.$profile->id)}}" class="btn btn-warning"><i class="fas fa-lock"></i> Change Password</a>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="p-3 border rounded text-center">
                                    <img src="{{asset('uploads/profile/'.$profile->image)}}" alt="profile image" width="100%" height="300px" style="object-fit: cover">
                                    <h5 class="mt-1 font-weight-bold">{{$profile->name}}</h5>
                                    <p>{{$profile->email}}</p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection