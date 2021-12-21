<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
            // 'user' => $user,
            'message' => 'Register sukses',
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
                'message' => 'Login Sukses',
                'token' => $token,
            ];



            return response()->json([
                'status' => 'sukses',
                // 'value' => $value,
                'data' => $response
            ],200);
        }

    }
    public function profile()
    {
        $data = Auth::user();

        return response()->json([
            'status' => 'success',
            'data' => [
                'name' => $data->name,
                'username' =>$data->username,
                'email' =>$data->email
                ]
        ],200);

    }
    public function update(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:191',
        //     'username' => 'string|max:191|unique:users,username',
        //     'email' => 'email|max:191|unique:users,email',
        //     // 'password' => 'required|string',
        //     'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //     'password_confirmation' => 'min:6'
        // ]);
        if (!$request->username) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'username' => Auth::user()->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        elseif (!$request->name) {
            User::where('id', Auth::user()->id)->update([
                'name' => Auth::user()->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }
        elseif (!$request->email) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => Auth::user()->email,
                'password' => Hash::make($request->password)
            ]);
        }
        elseif (!$request->password) {
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Auth::user()->password
            ]);
        }
        else{
            User::where('id', Auth::user()->id)->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
        }


        $response = [
            'message' => 'selamat data user berhasil dirubah',
            'status' => 'sukses',
            // 'user' => $user,
        ];
        return response($response, 201);
    }
}
