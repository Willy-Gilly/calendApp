@foreach($notifs as $notif)
    <ul id="notification_{{$notif["notificationId"]}}" class="notification_{{$notif["notificationType"]}}">
        <li id="notificationText_{{$notif["notificationId"]}}">{{$notif["notificationText"]}}</li>
    </ul>
@endforeach
