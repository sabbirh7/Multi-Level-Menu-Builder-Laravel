<ul>
    @foreach ($menus as $menu)
        <li>
            <a href="#">{{ $menu->title }}</a>

            {{-- Render child menus if they exist --}}
            @if ($menu->children->count() > 0)
                @include('menus.tree', ['menus' => $menu->children])
            @endif
        </li>
    @endforeach
</ul>
