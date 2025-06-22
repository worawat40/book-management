<?php

namespace App\Services;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthService
{
    public function __construct(protected UserRepository $userRepo) {}

    public function register(array $data): array
    {
        $user = $this->userRepo->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $token = JWTAuth::fromUser($user);

        return compact('user', 'token');
    }

    public function login(array $credentials): ?string
    {
        return JWTAuth::attempt($credentials);
    }

    public function logout(): void
    {
        JWTAuth::invalidate(JWTAuth::getToken());
    }
}
