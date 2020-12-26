<li @if(isset($item['id'])) id="{{ $item['id'] }}" @endif class="nav-item dropdown">

    {{-- Menu toggler --}}
    <a class="nav-link dropdown-toggle" href=""
       data-toggle="dropdown" {!! $item['data-compiled'] ?? '' !!}>

        {{-- Icon (optional) --}}
        @if(isset($item['icon']))
            <i class="{{ $item['icon'] }} {{
                isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''
            }}" id="{{isset($item['icon_id']) ?? ''}}"></i>
        @endif

        {{-- Text --}}
        {{ $item['text'] }}

        {{-- Label (optional) --}}
        @if(isset($item['label']))
            <span class="badge badge-{{ $item['label_color'] ?? 'primary' }}" @if(isset($item['label_id'])) id="{{$item['label_id']}}" @endif>
                {{ $item['label'] }}
            </span>
        @endif

    </a>

    {{-- Menu items --}}
    <ul class="dropdown-menu border-0 shadow">
        @each('adminlte::partials.navbar.dropdown-item', $item['submenu'], 'item')
    </ul>

</li>
