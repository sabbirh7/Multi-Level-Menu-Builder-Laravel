@extends('layouts.app')

@section('content')
    <h1>Create Menu</h1>

    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Menu Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="parent_id">Parent Menu</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option value="">-- Select Parent --</option>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
