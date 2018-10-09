<?php

namespace Kallun\Http\Controllers;

use Illuminate\Http\Request;
use Kallun\Repository\UserRepository;

class UserController extends Controller
{
    public function register(Request $request) {
        $res = $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6",
        ]);

        if($res) {
            $user = $request->only(["name", "password", "email"]);
            $response = UserRepository::create($user);
            return $response;
        } else {
            return response()->json([
                "message" => "User already exists!"
            ], 400);
        }
    }

    public function login (Request $request) {
        return "Logando";
    }
}
