<?php
namespace Kallun\Repository;

use Kallun\Models\User;

class UserRepository {
    public static function create($user) {
        $user["password"] = bcrypt($user["password"]);
        try {
            User::create($user)->save();

           return response()->json([
               "message" => "User was created with success!!",
           ], 201);

       } catch(Exception $ex) {
           return response()->json([
               "message" => $ex,
           ], 400);
       }
    }

    public static function findUser() {

    }
}