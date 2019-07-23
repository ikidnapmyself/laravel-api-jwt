<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PassportController extends Controller
{
    /**
     * Handles registration request.
     *
     * @param RegisterRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        $fields = $request->validated();

        $user = User::create([
            'name'     => Arr::get($fields, 'name'),
            'email'    => Arr::get($fields, 'email'),
            'password' => bcrypt(Arr::get($fields, 'password'))
        ]);

        $token = $user->createToken('laravel-inspire-api')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /**
     * Handles Login Request
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $fields = $request->validated();

        $credentials = [
            'email'    => Arr::get($fields, 'email'),
            'password' => Arr::get($fields, 'password')
        ];

        if (auth()->attempt($credentials))
        {
            $token = auth()->user()->createToken('laravel-inspire-api')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
}
