<li @if(isset($item['id'])) id="{{ $item['id'] }}" @endif>

    <a class="dropdown-item @if(isset($item['dropdown_header'])) dropdown-header @endif
        @if(isset($item['dropdown_footer'])) dropdown-footer @endif
        @if(isset($item['disabled'])) disabled @endif
        "
       @if(isset($item['inside_id'])) id="{{$item['inside_id']}}" @endif
       href="{{ $item['href'] }}"
       @if(isset($item['target'])) target="{{ $item['target'] }}" @endif
       {!! $item['data-compiled'] ?? '' !!}>

        {{-- Icon (optional) --}}
        @if(isset($item['icon']))
            <i class="{{ $item['icon'] ?? '' }} {{
                isset($item['icon_color']) ? 'text-' . $item['icon_color'] : ''
            }}"></i>
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

</li>
