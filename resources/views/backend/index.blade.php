@extends('backend.layouts.master')

@section('title', 'Dashboard')
@section('style')@endsection

@section('content')
    <!-- BREADCRUMB-->
    <section class="au-breadcrumb m-t-75">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb-content">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB-->
    <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                @if( $proj == 0)
                                <h2 class="number"><a class="text-white" href="#">0</a></h2>
                                @else
                                <h2 class="number">{{ $proj }}</h2>
                                @endif
                                <span class="desc"><a class="text-dark"  href="{{url('projects')}}">Projects online</a></span>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                @if( $rev == 0)
                                <h2 class="number"><a class="text-white" href="#">0</a></h2>
                                @else
                                <h2 class="number">{{ $rev }}</h2>
                                @endif
                                <span class="desc"><a class="text-dark"  href="{{ route('reviews') }}">Reviews</a></span>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                @if( $mess == 0)
                                <h2 class="number"><a class="text-white" href="#">0</a></h2>
                                @else
                                <h2 class="number">{{ $mess }}</h2>
                                @endif
                                <span class="desc"><a class="text-dark"  href="{{ route('messages')}}">Messages</a></span>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                @if( $serv == 0)
                                <h2 class="number"><a class="text-white" href="#">0</a></h2>
                                @else
                                <h2 class="number">{{ $serv }}</h2>
                                @endif
                                <span class="desc"><a class="text-dark" href="{{ route('services')}}">Services</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection


@section('script')
@endsection()
