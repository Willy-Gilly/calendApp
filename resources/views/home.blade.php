@extends('adminlte::page')

@section('title', 'CalendApp - '.__('home.home'))

@section('content_header')

@stop

@section('content')
    <div class="row col-sm-12">
        <div class="row col-sm-5">
            <button id="buttonTestToast" class="btn btn-primary col-sm-4" onclick="toastNotif('myText', 'myType')">
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
    <script src="{{ asset('js/updateDiv.js')}}"></script>
    <script>
        //Update notifs
        $.ready(
            $(function() {
                doGetAdd("/div/getUnseenNotifs",'#test');//Works

                let f = function() {
                    getNewNotification("/div/updateNotifs",'#test');//Works
                };
                f()
                window.setInterval(f, 5000); // (function executed, milliseconds)
            })
        );
    </script>
    <script>
        function toastNotif(innerText, notificationType)
        {
            $(document).Toasts('create',
                {
                    title: 'New Notification '+ notificationType,
                    autohide: true,
                    delay: 7500,
                    body: innerText,
                    image: '{{asset('image/monImage.jpg')}}',
                    imageAlt: 'Image Failed to Load',
                });
        }
    </script>
    <script>

        function getNewNotification(url,divToUpdate ,params) {
            params = params || {}
            $.get(url, params, function(response) { // requesting url which in form
                //console.log(response);
                $(divToUpdate).append(response); // getting response and pushing to element with id #response
                if(!(response ===  ""))
                {
                    let htmlObject = $(response);
                    let idElement = htmlObject.attr('id');
                    console.log(idElement);
                    let notificationType = htmlObject.attr('class').split("_")[1];
                    console.log(notificationType)
                    let idElementSplit = idElement.split("_")[1];
                    let idNotificationText = "#notificationText_"+idElementSplit;
                    console.log(idNotificationText)
                    let notificationText = $(idNotificationText).text();
                    console.log(notificationText);
                    toastNotif(notificationText,notificationType);
                }
            });
        }
    </script>
@stop
