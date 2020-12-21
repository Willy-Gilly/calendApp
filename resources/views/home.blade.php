@extends('adminlte::page')

@section('title', 'CalendApp - '.__('home.home'))

@section('content_header')

@stop

@section('content')
    <div class="row col-sm-12">
        <div id="test" class="">
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
    <script>
        //Update notifs
        $.ready(
            $(function() {
                doGetAdd("/div/getUnseenNotifs",'#test');//Works

                let f = function() {
                    doGetAdd("/div/updateNotifs",'#test');//Works
                };
                f()
                window.setInterval(f, 5000); // (function executed, milliseconds)
            })
        );
    </script>

@stop
