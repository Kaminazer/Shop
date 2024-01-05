<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Models\Tag;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        Tag::firstOrCreate($data);
        return redirect()->route('tag.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Tag $tag):View
    {
        return view('tag.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag ):View
    {
        return view('tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tag $tag):RedirectResponse
    {
        $data = $request->validated();
        $tag->update($data);
        return redirect()->route('tag.show', $tag->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag):RedirectResponse
    {
        $tag->delete();
        return redirect()->route('tag.index');
    }
}
