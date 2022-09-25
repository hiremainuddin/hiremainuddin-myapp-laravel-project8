@extends('backend.layouts.master')

@section('title', 'Edit Project')
@section('style')
@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                 @include('backend.layouts.message')
                <form action="{{ route('update',['id'=> $project->id]) }}" method="POST" enctype="multipart/form-data">
                       @csrf
                     <div class="card">
                        <div class="card-header">
                            <strong>Edit Project</strong>
                            <a class="btn btn-primary float-right" href="{{url('projects')}}">Go Back</a>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" value="{{ $project->title }}" id="title" placeholder="Project title" class="form-control">
                                @if($errors->has('title'))
                                <small class="text-danger ml-1">{{$errors->first('title')}}</small>
                                @endif
                            </div>
                            <select class="form-control" name="category">
                              <option value="Web Design">Web Design</option>
                              <option value="Web Development">Web Development</option>
                              <option value="UI & UX Design">UI & UX Design</option>
                            </select>
                            <div class="form-group">
                                <label for="description" class="form-control-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="5">{{ $project->description }}</textarea>
                                 @if($errors->has('description'))
                                <small class="text-danger ml-1">{{$errors->first('description')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="street" class=" form-control-label">Photo</label>
                                <input type="file"  name="photo" id="photo" class="form-control">
                                <img class="w-50 img-fluid img-thumbnail" src="{{ asset('backend/projectImage/'.$project->photo)}}" alt="">
                                 @if($errors->has('photo'))
                                <small class="text-danger ml-1">{{$errors->first('photo')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Link</label>
                                <input type="text" id="link" value="{{ $project->link }}"  name="link" placeholder="Add project link" class="form-control">
                                 @if($errors->has('link'))
                                <small class="text-danger ml-1">{{$errors->first('link')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="country" class="form-control-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="1" {{ $project->status == '1' ? 'selected' : ''}}>Active</option>
                                    <option value="0" {{ $project->status == '0' ? 'selected' : ''}}>Inactive</option>
                                </select>
                                 @if($errors->has('status'))
                                <small class="text-danger ml-1">{{$errors->first('status')}}</small>
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
