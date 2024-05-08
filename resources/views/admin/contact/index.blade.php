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
                        <h5>Contacts Table</h5>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Full name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Subject</th>
                              <th>Sent_at</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($contacts as $contact)
                                <tr>
                                  <td>{{$contact->id}}</td>
                                  <td>{{$contact->name}}</td>
                                  <td>{{$contact->email}}</td>
                                  <td>{{$contact->phone}}</td>
                                  <td>{{$contact->subject}}</td>
                                  <td>
                                    {{ $contact->created_at }}
                                  </td>
                                  <td>
                                    <a href="{{url('admin/contact/view/'.$contact->id)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i> View</a>
                                    <a href="{{url('admin/contact/delete/'.$contact->id)}}" onclick="return confirm('Are you sure you want to delete this email? It cannot be undone')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                  </td>
                                </tr>
                            @empty
                                <div>
                                  <h6 class="text-danger text-center">No Contacts Found!</h6>
                                </div>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="card-footer">
                      {{$contacts->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection