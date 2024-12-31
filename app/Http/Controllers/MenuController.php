<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Show the form for creating a new menu
    public function create()
    {
        $menus = Menu::all();  // Get all menus to show as possible parents
        return view('menus.create', compact('menus'));
    }

    // Store a newly created menu
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:menus,id',  // Ensure parent exists
        ]);

        Menu::create([
            'title' => $request->title,
            'parent_id' => $request->parent_id,
        ]);

        return redirect()->route('menus.index');
    }

    // Display the menu list with hierarchy
    public function index()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->get(); // Get root menus and their children
        return view('menus.index', compact('menus'));
    }
}
