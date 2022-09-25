@extends('backend.layouts.master')

@section('title', 'Messages')
@section('style')

@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                 <h2>Services</h2>
                  <div class="col mb-4">
                      <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#services">
                        Add Service
                       </button>
                  </div>
                <div class="col-lg-12">
                  @include('backend.layouts.message')
                  @php
                  $services = DB::table('services')->paginate(6);
                  $count = 0;
                  @endphp
                   <div class="row">
                       <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                @php
                                $count ++;
                                @endphp
                                <tr>
                                  <td>{{ $count}}</td>
                                  <td>{{ $service->title ?? ''}}</td>
                                  <td>{{ \Illuminate\Support\Str::limit($service->description, 50, '...') }}</td>
                                  <td>
                                    <a class="btn btn-primary" data-toggle="modal" href="#update-services{{$service->id}}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-danger" href="{{ route('delete-service',['id'=> $service->id])}}" onclick="return confirm('Are you sure you want to delete this item')"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                    <div class="mt-5 d-flex justify-content-center">
                        {!! $services->links('pagination::bootstrap-4') !!}
                    </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- add  Modal -->
<div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('service-store')}}" method="post">
            @csrf
          <div class="form-group">
            <label for="exampleInputEmail1">Icon</label>
            <input type="text" class="form-control" name="icon">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Add Service</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

@foreach($services as $service)
<!-- update  Modal -->
<div class="modal fade" id="update-services{{ $service->id ?? ''}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update Service</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('update-services',['id'=>$service->id]) }}" method="post">
            @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Icon</label>
            <input type="text" class="form-control" name="icon" value="{{ $service->icon ?? ''}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $service->title ?? ''}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="description">{{ $service->description ?? ''}}</textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update Service</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
 @endforeach
@endsection


@section('script')
@endsection()
