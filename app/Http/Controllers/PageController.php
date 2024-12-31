<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all(); // Retrieve all pages
        return response()->json($pages); // Return a view with the pages
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create'); // Return a view to create a new page
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {
        $validated = $request->validated(); // Validate the request using StorePageRequest
        Page::create($validated); // Create a new page using mass-assignment
        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        return view('pages.show', compact('page')); // Return a view to show the page details
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        return view('pages.edit', compact('page')); // Return a view to edit the page
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $validated = $request->validated(); // Validate the request using UpdatePageRequest
        $page->update($validated); // Update the page with new data
        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        $page->delete(); // Delete the specified page
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
