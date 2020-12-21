@foreach($notifs as $notif)
    <ul>
        <li>{{$notif["notificationText"]}}</li>
    </ul>
@endforeach
