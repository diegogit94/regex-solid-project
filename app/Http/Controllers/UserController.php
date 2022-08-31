<?php

namespace App\Http\Controllers;

use App\Actions\UserStoreAction;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        return view('user.create');
    }

    public function store(UserRequest $request, UserStoreAction $userStoreAction): RedirectResponse
    {
        $user = $userStoreAction->execute($request);

        return redirect()->route('user.show', $user);
    }

    public function show(User $user): View
    {
        return view('user.show', compact('user'));
    }
}
