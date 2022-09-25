@extends('backend.layouts.master')

@section('title', 'Messages')
@section('style')

@endsection

@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ url('delete-all-msg') }}" class="btn btn-danger float-right mb-4">Delete all msg</a>
                <div class="col-lg-12">
                  <h2>Messages</h2>
                  <br>
                  @include('backend.layouts.message')
                  @php

                  $messages = DB::table('messages')->paginate(6);
                  $count = 0;
                  @endphp
                   <div class="row">
                       <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $message)
                                @php
                                $count ++;
                                @endphp
                                <tr>
                                  <td>{{ $count}}</td>
                                  <td>{{ $message->name}}</td>
                                  <td>{{ $message->email}}</td>
                                  <td>
                                    <a class="btn btn-primary" data-toggle="modal" href="#msgModal{{$message->id}}"><i class="fas fa-eye"></i></a>
                                    <a class="btn btn-danger" href="{{ route('delete-message',['id'=> $message->id])}}" onclick="return confirm('Are you sure you want to delete this item')"><i class="fas fa-trash"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination -->
                    <div class="mt-5 d-flex justify-content-center">
                        {!! $messages->links('pagination::bootstrap-4') !!}
                    </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 

@foreach($messages as $message)
{{-- modal --}}
<div class="modal fade" tabindex="-1" id="msgModal{{$message->id ?? ''}}" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label for="#"><strong>Name :</strong> {{$message->name ?? ''}}</label><br>
        <label for="#"><strong>Email :</strong> {{$message->email ?? ''}}</label><br>
        <label for="#"><strong>Message :</strong></label><br>
        <p>{{$message->message ?? ''}}</p>
      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
@endforeach
@endsection


@section('script')
@endsection()
