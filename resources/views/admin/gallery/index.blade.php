@extends('layouts.admin')

@section('content')

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h6 class="modal-title font-weight-bold"><i class="fas fa-tags"></i> Add New Images</h6>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('storeImages') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="modal-body">
                <div class="form-group">
                    <label>Choose Images*</label>
                    <input type="file" multiple name="images[]" class="form-control" value="{{old('name')}}">
                    @error('images')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save Images</button>
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
                <h4 class="m-0">Gallery Images</h4>
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
                        <span>Gallery Table</span>
                        <a href="#" data-toggle="modal" data-target="#modal-lg" class="btn btn-sm btn-primary float-right"><i class="fas fa-plus"></i> Add Images</a>
                    </div>

                    <div class="card-body">
                        <div class="gallery-wrapper">
                            @forelse ($images as $img)
                                <div class="gallery-img-box">
                                    @if ($img->image)
                                        <img src="{{url($img->image)}}" width="120px" height="90px" style="object-fit:cover" alt="">
                                    @else
                                        <h6 class="text-center">No Images have been uploaded</h6>
                                    @endif
                                    
                                    <span><a href="{{url('admin/gallery/delete/'.$img->id)}}" class="text-danger"><i class="fas fa-trash"></i></a></span>
                                </div>
                            @empty
                                <div class="text-center w-100">
                                    <h6 class="text-center">No Images Found!</h6>  
                                </div>
                            @endforelse
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

@endsection