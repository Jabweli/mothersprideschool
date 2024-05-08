@extends('layouts.admin')

@section('content')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0">Settings</h5>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">settings</li>
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
                        <span class="font-weight-bold">Website Settings</span>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('saveSettings')}}" class="row g-3 col-10 mx-auto" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12 form-group">
                                <label for="">Website Title</label>
                                <input type="text" name="title" class="form-control" value="{{$settings->title}}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$settings->email}}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Phone Contact</label>
                                <input type="text" name="phone" class="form-control" value="{{$settings->phone}}">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="{{$settings->address}}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Facebook link</label>
                                <input type="text" name="facebook" class="form-control" value="{{$settings->facebook}}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Instagram link</label>
                                <input type="text" name="instagram" class="form-control" value="{{$settings->instagram}}">
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="">Twitter link</label>
                                <input type="text" name="twitter" class="form-control" value="{{$settings->twitter}}">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="">Youtube link</label>
                                <input type="text" name="youtube" class="form-control" value="{{$settings->youtube}}">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Website Logo</label>
                                <input type="file" name="logo" class="form-control">

                                <img src="{{asset('uploads/settings/'.$settings->logo)}}" width="100px" class="mt-3" alt="website_logo">
                            </div>


                            <div class="col-md-12 form-group">
                                <label for="">Footer Copyright text</label>
                                <input type="text" name="copyright_text" class="form-control" value="{{$settings->copyright}}">
                            </div>

                            <div class="col-md-12 form-group">
                                <label for="">Site Description</label>
                                <textarea name="description" class="form-control" cols="30" rows="5">{{$settings->description}}</textarea>
                            </div>
                           
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Save Settings</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection