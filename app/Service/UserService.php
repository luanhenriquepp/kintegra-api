<?php

namespace App\Service;

use App\User;
use Illuminate\Http\Request;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function login(Request $request) {

        $credentials = $request->only('email', 'password');

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json([
            'token' => $token,
            'type' => 'bearer',
            'expires' => auth('api')->factory()->getTTL() * 600,

        ]);
    }
}
