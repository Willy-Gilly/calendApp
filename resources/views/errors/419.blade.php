@extends('adminlte::page')

@section('title', __('home.error').' 419')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('home.error')}} 419</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">
                        {!! __('home.authenticationTimoutError') !!}
                    </p>
                </div>
            </div>
            <div class="custom-404-div">
                <a class="btn btn-block btn-primary btn-lg custom-403-button" href="{{ url()->previous() }}"> {{__('home.back')}} </a>
            </div>
        </div>
    </div>
@stop
