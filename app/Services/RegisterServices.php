<?php


namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterServices
{
    public function store($request){
//        dd(1111);
         User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
