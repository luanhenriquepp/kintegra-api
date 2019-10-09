<?php

namespace App\Service;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserService
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
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
