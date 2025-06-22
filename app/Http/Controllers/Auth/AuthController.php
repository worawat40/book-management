<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService) {}

    public function register(RegisterRequest $request)
    {
        $result = $this->authService->register($request->validated());

        return response()->json([
            'token' => $result['token'],
            'message' => 'Registration successful',
        ], 201);
    }

    public function login(LoginRequest $request)
    {
        $token = $this->authService->login($request->only('email', 'password'));

        if (! $token) {
            return response()->json(['error' => 'Invalid credentials.'], 401);
        }

        return response()->json([
            'token' => $token,
            'message' => 'Login successful',
        ], 200);
    }

    public function logout()
    {
        $this->authService->logout();

        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
