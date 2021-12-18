<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'username' => 'required|string|max:191|unique:users,username',
            'email' => 'required|email|max:191|unique:users,email',
            // 'password' => 'required|string',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $token = $user->createToken('riastoreToken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response(['message' => 'Logout Successfully']);
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string',

        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password)) {
            return response(['message' => 'Invalid Credentials'], 401);
        }
        else {
            $token = $user->createToken('riastoreTokenLogin')->plainTextToken;
            $response = [
                'user' => $user,
                'token' => $token,
            ];

            
            return response()->json([
                'status' => 'sukses',
                'data' => $response
            ],200);
        }


    }
}
