@extends('layouts.admin')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">Contacts</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">contacts</li>
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
                        <span class="font-weight-bold">Message View</span>
                        <a href="{{url('admin/contacts')}}" class="btn btn-sm btn-primary float-right"><i class="fas fa-arrow-left"></i> Back To Contact List</a>
                    </div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$contact->name}}" readonly>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$contact->email}}" readonly>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$contact->phone}}" readonly>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$contact->subject}}" readonly>
                                </div>

                                <div class="form-group">
                                    <textarea name="" class="form-control" cols="30" rows="5" readonly>{{$contact->message}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection