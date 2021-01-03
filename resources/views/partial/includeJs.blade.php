@switch($pageName ?? '')
    @case('notification')
    <script src="{{asset('js/notification.js')}}"></script>
    @break
    @default
    <!-- No Js included -->
@endswitch
