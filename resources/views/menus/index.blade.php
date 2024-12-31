@extends('layouts.app')

@section('content')
    <h1>Menu List</h1>

    <ul class="menu-list">
        @foreach ($menus as $menu)
            <li class="menu-item @if ($menu->children->count() > 0) parent-menu @endif">
                {{ $menu->title }}

                {{-- If the menu has children, display them recursively --}}
                @if ($menu->children->count() > 0)
                    @include('menus.tree', ['menus' => $menu->children])
                @endif
            </li>
        @endforeach
    </ul>

    <style>
        /* Base styles for menu items */
        .menu-list {
            list-style-type: none;
            padding-left: 0;
        }

        .menu-item {
            font-size: 16px;
            padding: 5px 0;
        }

        /* Style for parent menu items */
        .parent-menu {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
            padding-left: 20px;
        }

        /* Indent child items */
        .menu-item ul {
            padding-left: 20px;
            list-style-type: none;
        }

        /* Style for child menu items */
        .menu-item li {
            font-size: 14px;
            padding: 5px 0;
            color: #555;
        }

        /* Optional: Style the hover effect for better UX */
        .menu-item:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }

        .menu-item > a {
            text-decoration: none;
            color: inherit;
        }

        .menu-item > a:hover {
            color: #007bff;
        }
    </style>
@endsection
