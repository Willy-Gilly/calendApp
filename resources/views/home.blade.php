@extends('adminlte::page')

@section('title', 'CalendApp - '.__('home.home'))

@section('content_header')

@stop

@section('content')
    <div id="page" class="row col-sm-12">
        <div class="row col-sm-5">
            <button id="buttonTestToast" class="btn btn-primary col-sm-4" onclick="toastNotif('1', '0')">
                Toast
            </button>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
<script>

</script>
@stop
