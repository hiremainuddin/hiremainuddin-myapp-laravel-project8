@extends('backend.layouts.master')

@section('title', 'View Messages')
@section('style')

@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                   <div class="row">
                       <div class="card w-100">
                        @include('backend.layouts.message')
                       	<div class="card-header">
                       		<h4>Profile View</h4>
                       	</div>
                        @php
                        $profile_data = DB::table('users')->first();
                        @endphp
                       	<div class="card-body">
                       		<div class="row p-5">
                                <div class="col">
                                <img class="img-fluid img-thumbnail w-50" src="{{ asset($profile_data->image ?? '') }}" alt="">
                                <br>
                                <br>
                                <strong for="#">Full Name</strong>
                                <p>{{ $profile_data->name ?? ''}}</p>
                                <br>
                                <strong for="#">Email</strong>
                                <p>{{ $profile_data->email ?? ''}}</p>
                                <br>
                                <strong for="#">Phone</strong>
                                <p>{{ $profile_data->phone ?? ''}}</p>
                                <strong for="#">About</strong>
                                <p>{{ $profile_data->description ?? '' }}</p>


                            </div>
                          </div>
                       	</div>
                       	<div class="card-footer">
                       		<a  href="#profile" data-toggle="modal" class="btn btn-outline-success float-right">Update</a>
                       	</div>
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 

{{-- modal --}}
<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('profile-update',['id'=>$profile_data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{$profile_data->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" value="{{$profile_data->email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" name="image">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Age</label>
            <input type="text" class="form-control" name="age" value="{{$profile_data->age}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{$profile_data->phone}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" name="address" value="{{$profile_data->address}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description">{{$profile_data->description}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
@endsection


@section('script')
@endsection()
