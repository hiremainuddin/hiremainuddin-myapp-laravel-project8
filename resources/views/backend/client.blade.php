@extends('backend.layouts.master')
@section('title', 'All Client')
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
                 <a href="#"data-toggle="modal" data-target="#clientModal" class="btn btn-primary float-right mb-4">Add Brand</a>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table  table-dark">
                            <thead>
                                <tr>
                                    <th>N.</th>
                                    <th>Company</th>
                                    <th>Logo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1;@endphp
                                @foreach($client_data as $data)
                                <tr>
                                    <td>{{ $i ++; }}</td>
                                    <td>{{ $data->company }}</td>
                                    <td><img  width="80" class="proImage" src="{{ $data->logo }}" alt="image"></td>
                                    <td>
                                        <a data-toggle="modal" href="#UpdateData{{ $data->id }}" class="btn btn-success">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete this item?')" href="{{ route('delete',['id' => $data->id])}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                    <div class="mt-5 d-flex justify-content-center">
                        {!! $client_data->links('pagination::bootstrap-4') !!}
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
        <h5 class="modal-title">Imamge Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('client-data') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <label for="#">Company</label>
          <div class="form-group">
            <input type="text" name="company" class="form-control" >
          </div>
           <label for="#">Logo</label>
          <div class="form-group">
            <input type="file" name="logo" class="form-control-file" id="file">
          </div>
      </div>
      <div class="modal-footer">
        <button  type="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>



{{-- update modal --}}
@foreach($client_data as $data)
<div class="modal fade" tabindex="-1" id="UpdateData{{ $data->id }}" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Imamge Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('update-client-data',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <label for="#">Company</label>
          <div class="form-group">
            <input type="text" name="company" value="{{ $data->company }}" class="form-control" >
          </div>
           <label for="#">Logo</label>
          <div class="form-group">
            <input type="file" name="logo" class="form-control-file" id="file">
          </div>
      </div>
      <div class="modal-footer">
        <button  type="submit" class="btn btn-primary">Upload</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection


@section('script')
@endsection()
