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
                  <h2>Messages</h2>
                  <br>
                   <div class="row">
                       <div class="card w-100">
                       	<div class="card-header">
                       		<h4>Message View</h4>
                       	</div>
                       	<div class="card-body">
                       		<div class="row justify-content-center">
                       			<div class="col-sm-6">
                       				<label for="#"><strong>Name</strong></label>
                       				<h4>{{ $message->name }}</h4>
                       				<br>
                       				<label for="#"><strong>Email</strong></label>
                       				<p>{{ $message->email }}</p>

                       			</div>
                       			<div class="col-sm-12">
                       				<label for="#"><strong>Message</strong></label>
                       				<p>{{ $message->message }}</p>
                       			</div>
                       		</div>
                       	</div>
                       	<div class="card-footer">
                       		<a href="{{ route('messages')}}" class="btn btn-outline-success float-right">Go Back</a>
                       	</div>
                       </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection


@section('script')
@endsection()
