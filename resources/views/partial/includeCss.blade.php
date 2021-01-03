@switch($pageName ?? '')
    @case('notification')
        <link rel="stylesheet" href="{{ asset('css/notification.css') }}">
    @break
    @default
        <!-- No Css included -->
@endswitch
