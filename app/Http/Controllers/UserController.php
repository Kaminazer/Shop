<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index():View
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view ('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request):RedirectResponse
    {
        $data = $request->validated();
        User::firstOrCreate($data);
        return redirect()->route('user.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user):View
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user ):View
    {
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user):RedirectResponse
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('user.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user):RedirectResponse
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
