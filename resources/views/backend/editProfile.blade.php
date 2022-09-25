@extends('backend.layouts.master')

@section('title', 'Update Profile')
@section('style')
@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                 @include('backend.layouts.message')
                <form action="{{ route('update-profile',['id'=> $profile->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                     <div class="card">
                        <div class="card-header">
                            <strong>Update Profile</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Full Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ $profile->name }}" placeholder="Ex. Abdullah" class="form-control">
                                @if($errors->has('name'))
                                <small class="text-danger ml-1">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Image<span class="text-danger">*</span></label>
                                <input type="file" name="image" placeholder="Ex. Profile Image" class="form-control">
                                @if($errors->has('image'))
                                <small class="text-danger ml-1">{{$errors->first('image')}}</small>
                                @endif
                                <br>
                                <img class="img-fluid w-50" src="{{ asset('backend/images/'.$profile->image) }}" alt="">
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Profile(Job)<span class="text-danger">*</span></label>
                                <input type="text" name="profile" value="{{ $profile->profile }}" placeholder="Ex. Designer" class="form-control">
                                @if($errors->has('profile'))
                                <small class="text-danger ml-1">{{$errors->first('profile')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email" class=" form-control-label">Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ $profile->email }}" placeholder="Ex. Example@gmail.com" class="form-control">
                                @if($errors->has('email'))
                                <small class="text-danger ml-1">{{$errors->first('email')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="phone" class=" form-control-label">Phone<span class="text-danger">*</span></label>
                                <input type="tel" name="phone" value="{{ $profile->phone }}" placeholder="Ex. 01700000000" class="form-control">
                                @if($errors->has('phone'))
                                <small class="text-danger ml-1">{{$errors->first('phone')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-control-label">Description</label>
                                <textarea class="form-control" name="about" rows="5">{{ $profile->about }}</textarea>
                                 @if($errors->has('description'))
                                <small class="text-danger ml-1">{{$errors->first('description')}}</small>
                                @endif
                            </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection


@section('script')
@endsection()
