<?php

namespace App\Actions;

use App\Http\Requests\UserRequest;
use App\Models\User;

class UserStoreAction
{
    public function execute(UserRequest $request): User
    {
        return User::create($request->all());
    }
}
