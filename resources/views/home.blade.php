@extends('adminlte::page')

@section('title', 'CalendApp - '.__('home.home'))

@section('content_header')

@stop

@section('content')
    <div class="row col-sm-12">
        <div class="row col-sm-5">
            <button id="buttonTestToast" class="btn btn-primary col-sm-4" onclick="toastNotif('1', '0')">
                Toast
            </button>
        </div>
    </div>
    <div class="row col-sm-6" id="test">

    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        //Update notifs
        $.ready(
            $(function() {
                updateNotif() // Pour l'utiliser de manière instantanée
                let f = function() {
                    updateNotif();
                };
                f()
                window.setInterval(f, 5000); // (function executed, milliseconds)
            })
        );
    </script>

@stop
