@foreach($notifs as $notif)
    <ul>
        @foreach($notif->getAttributes() as $oneLine)
            <li>{{$oneLine}}</li>
        @endforeach
    </ul>
@endforeach
