@extends('layouts.admin')

@section('content')

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title font-weight-bold"><i class="fas fa-tags"></i> Add New Category</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('storeCategory') }}" method="post">
            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label>Category Name*</label>
                    <input type="text" name="name" class="form-control" placeholder="Category..." value="{{old('name')}}">
                    @error('name')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- <div class="form-group">
                    <label>Slug*</label>
                    <input type="text" name="slug" class="form-control" placeholder="Enter slug" value="{{old('slug')}}">
                    @error('slug')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Short description">{{old('description')}}</textarea>
                    @error('description')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <span class="font-weight-bold">Active
                        <input type="checkbox" name="active" value="{{old('status')}}">
                        @error('status')
                          <small class="text-danger">{{$message}}</small>
                        @enderror
                    </span>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Category</button>
            </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h4 class="m-0">Categories</h4>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Categories</li>
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
                        <span>Category Table</span>
                        <a href="#" data-toggle="modal" data-target="#modal-lg" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add New Category</a>
                    </div>

                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Category</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                  <td>{{$category->id}}</td>
                                  <td>{{$category->name}}</td>
                                  <td>
                                    {{ $category->status == "1"? "Active":"Not active" }}
                                  </td>
                                  
                                  <td>
                                    <a href="{{url('admin/category/edit/'.$category->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="{{url('admin/category/delete/'.$category->id)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                            @empty
                                <div>
                                  <h6 class="text-danger text-center">No Categories Found!</h6>
                                </div>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <div class="card-footer">
                      {{$categories->links()}}
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection