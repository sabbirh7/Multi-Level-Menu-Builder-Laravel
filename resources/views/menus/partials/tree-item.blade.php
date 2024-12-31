<li class="mb-2">
    <!-- Parent Menu -->
    <div class="font-semibold py-2 px-4 bg-gray-200 rounded">
        {{ $menu->title }}
    </div>

    <!-- Child Menus -->
    @if (isset($menu->children) && count($menu->children) > 0)
        <ul class="ml-4 border-l-2 border-gray-300 pl-4 mt-2">
            @foreach ($menu->children as $child)
                @include('menus.partials.tree-item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>
