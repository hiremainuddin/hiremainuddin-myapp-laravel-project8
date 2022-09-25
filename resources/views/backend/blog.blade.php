@extends('backend.layouts.master')
@section('title', 'Blogs')
@section('style')
<style>
    .m-t-30 {
       margin-top: 0px;
    }
    .btn-sm{
        margin-bottom: 10px;
    }
</style>
@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                @include('backend.layouts.message')
                 <a href="#"data-toggle="modal" data-target="#clientModal" class="btn btn-primary float-right mb-4">Create Blog</a>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table  table-dark">
                            <thead>
                                <tr>
                                    <th>N.</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@php
			                     $blogs = DB::table('blogs')->paginate(6);
			                     $i=1;
			                    @endphp

                                @foreach($blogs as $data)
                                <tr>
                                    <td>{{ $i ++; }}</td>
                                    <td><img  width="80" class="proImage" src="{{ $data->img ?? ''}}" alt="image"></td>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->description }}</td>
                                    <td>
                                        <a data-toggle="modal" href="#UpdateData{{ $data->id }}" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{ route('blog/delete',['id' => $data->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                    <div class="mt-5 d-flex justify-content-center">
                        {!! $blogs->links('pagination::bootstrap-4') !!}
                    </div>
                    </div>
                    
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div> 


{{-- modal --}}
{{-- modal --}}

<div class="modal fade" tabindex="-1" id="clientModal" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Blog create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('blog/create') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <label for="#">title</label>
          <div class="form-group">
            <input type="text" name="title" class="form-control" >
          </div>
           <label for="#">Description</label>
          <div class="form-group">
            <textarea name="description" class="form-control"> </textarea>
          </div>
          <label for="#">Image</label>
          <div class="form-group">
            <input type="file" name="img" class="form-control-file" id="file">
          </div>
      </div>
      <div class="modal-footer">
        <button  type="submit" class="btn btn-primary">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>



{{-- update modal --}}
@foreach($blogs as $data)
<div class="modal fade" tabindex="-1" id="UpdateData{{ $data->id }}" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Blog update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('blog/update',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <label for="#">title</label>
          <div class="form-group">
            <input type="text" name="title" value="{{ $data->title }}" class="form-control" >
          </div>
           <label for="#">Description</label>
          <div class="form-group">
            <textarea name="description" class="form-control">{{ $data->description }} </textarea> 
          </div>
          <label for="#">Image</label>
          <div class="form-group">
            <input type="file" name="img" class="form-control-file" id="file">
          </div>
      </div>
      <div class="modal-footer">
        <button  type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection


@section('script')
@endsection()
