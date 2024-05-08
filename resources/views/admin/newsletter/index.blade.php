@extends('layouts.admin')

@section('content')

  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">Newsletter Subscriptions</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">subscriptions</li>
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
                        <h5>Newsletter Table</h5>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Email</th>
                              <th>Created_at</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($newsletters as $item)
                                <tr>
                                  <td>{{$item->id}}</td>
                                  <td>{{$item->email}}</td>
                                  <td>
                                    {{ $item->created_at }}
                                  </td>
                                  <td>
                                    <a href="{{url('admin/newsletter/delete/'.$item->id)}}" onclick="return confirm('Are you sure you want to delete this email? It cannot be undone')" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Delete</a>
                                  </td>
                                </tr>
                            @empty
                                <div>
                                  <h4 class="text-danger text-center">No Categories Found!</h4>
                                </div>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="card-footer">
                      {{$newsletters->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection