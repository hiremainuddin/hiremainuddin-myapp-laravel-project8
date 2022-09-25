@extends('backend.layouts.master')

@section('title', 'Create Review')
@section('style')
@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                 @include('backend.layouts.message')
                <form action="{{ route('update-review',$review->id) }}" method="POST">
                     @csrf
                     <div class="card">
                        <div class="card-header">
                            <strong>Update Review</strong>
                            <a href="{{route('reviews')}}" class="btn btn-sm float-right btn-outline-success">Back</a>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Owner<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ $review->name }}" class="form-control">
                                @if($errors->has('name'))
                                <small class="text-danger ml-1">{{$errors->first('name')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Job<span class="text-danger">*</span></label>
                                <input type="text" name="job" id="job" value="{{ $review->job }}" class="form-control">
                                @if($errors->has('job'))
                                <small class="text-danger ml-1">{{$errors->first('job')}}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comment" class="form-control-label">Comment</label>
                                <textarea class="form-control" name="comment" id="comment" rows="5">{{ $review->comment }}</textarea>
                                 @if($errors->has('comment'))
                                <small class="text-danger ml-1">{{$errors->first('comment')}}</small>
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
