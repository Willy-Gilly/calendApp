@extends('adminlte::page')

@section('title', __('home.error').' 401')

@section('content_header')
    <h1 class="m-0 text-dark">{{__('home.error')}} 401</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">
                        {!! __('home.unauthorizedError') !!}
                    </p>
                </div>
            </div>
            <div class="custom-403-div">
                <a class="btn btn-block btn-danger btn-lg custom-403-button" href="{{ url()->previous() }}"> {{__('home.back')}} </a>
            </div>
        </div>
    </div>
@stop
