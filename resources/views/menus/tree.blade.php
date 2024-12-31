<ul>
    @foreach ($menus as $menu)
        <li>
            {{ $menu->title }}

            {{-- Render grandchildren if they exist --}}
            @if ($menu->children->count() > 0)
                @include('menus.tree', ['menus' => $menu->children])
            @endif
        </li>
    @endforeach
</ul>
