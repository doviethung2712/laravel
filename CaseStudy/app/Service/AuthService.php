<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register($request)
    {
        $data = $request->only('name', 'email', 'password', 'role_id');
        $data['password'] = Hash::make($data['password']);
        DB::table('users')->insert($data);
    } 
}
