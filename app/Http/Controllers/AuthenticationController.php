<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function createAccount(Request $request)
    {

        $validation = Validator::make($request->all(), [
            "email" => "required|email:rfc,dns",
            "password" => "required|string|min:6|confirmed"
        ]);

        if ($validation->fails()) {
            return response()->json(["errors" => $validation->errors()->all()], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $user = User::create([
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);
        $token = $user->createToken('token')->plainTextToken;

        return \response()->json([
            "token" => $token
        ]);
    }
}
