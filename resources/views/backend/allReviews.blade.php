@extends('backend.layouts.master')

@section('title', 'All Projects')
@section('style')
<style>
    img.proImage {
        width: 80px;
    }
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
                 <a href="{{ route('create-review')}}" class="btn btn-sm btn-primary float-right">Add Review</a>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Profession</th>
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reviews as $review)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $review->name }}</td>
                                    <td>{{ $review->job }}</td>
                                    <td>{{ Str::limit($review->comment, 15) }}</td>
                                    <td>
                                        <a href="{{ route('edit-review',['id' => $review->id])}}" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{ route('delete-review',['id' => $review->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                    <div class="mt-5 d-flex justify-content-center">
                        {!! $reviews->links('pagination::bootstrap-4') !!}
                    </div>
                    </div>
                    
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection


@section('script')
@endsection()
