<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.profile', [
            'user' => auth()->user(),
        ]);
    }

    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'biography' => 'required',
            'avatar' => 'file',
        ]);

        $validated['avatar'] = request('avatar')->store('avatars');

        $user->update($validated);

        return back();
    }

    public function store(UserRequest $request)
    {

        User::create($request->validated());

        return back()
        ->with('flash', 'Uspjesno ste dodali korisnika');
    }
}
