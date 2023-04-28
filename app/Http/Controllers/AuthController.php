<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function loginWithFormRequest(Login $request)
    {
        $validated = $request->validated();
    }
    public function registerWithFormRequest(Register $request)
    {
        $validated = $request->validated();
    }
    public function loginWithValidate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], ['email' => 'email joise']);
    }
    public function registerWithValidate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
    }
    public function loginWithValidator(Request $request)
    {
        $credentials = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $valid = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if ($credentials->fails()) {
            echo $credentials->messages();
        } else {
            if (Auth::attempt($valid)) {
                return 'login success';
            } else {
                return 'login failed';
            }
        }
    }
    public function registerWithValidator(Request $request)
    {
    }
}
