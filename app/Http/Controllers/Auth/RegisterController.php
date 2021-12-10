<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Http\Controllers\Auth\BaseController;
use App\Services\RegisterServices;
use Illuminate\Support\Facades\Hash;

class RegisterController extends BaseController
{
    public function __construct(RegisterServices $services)
    {
        parent::__construct($services);
        $this->middleware('guest');
    }

    public function index(){
        return view('auth.register');
    }
    public function store(RegisterRequest $request){

        $request->validated();
// Всю логику выносим в Service
//        User::create([
//            'name' => $request->name,
//            'username' => $request->username,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
       $this->services->store($request);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
