<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function showSignUpPage()
    {
        return view("auth.sign_up_page");
    }

    public function signUp(Request $request)
    {
        $signUpRequest = $request->validate([
            "username" => ["required", "string", "min:3", "max:50"],
            "email" => ["required", "email", Rule::unique("users", "email")],
            "gender" => ["required", "string", Rule::in(["Male", "Female"])],
            "phone_number" => ["required", "digits_between:10,11", Rule::unique("users", "phone_number")],
            "password" => ["required", "string", "min:8", "confirmed"]
        ]);

        // hash password
        $signUpRequest["password"] = bcrypt($signUpRequest["password"]);

        // assign default credits for each newly signed up user
        $signUpRequest["credits"] = 100;

        // create a new user data
        DB::table("users")->insert($signUpRequest);

        return redirect()->route("auth.login_page")->with("success", "User signed up successfully.");
    }

    public function showLoginPage()
    {
        return view("auth.login_page");
    }

    public function login(Request $request)
    {
        $loginRequest = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);

        if (auth()->guard()->attempt(["email" => $loginRequest["email"], "password" => $loginRequest["password"]])) {
            $request->session()->regenerate();
            return redirect()->route("skills.index");
        }

        return redirect()->back()->withInput()->withErrors("Incorrect email or password.");
    }

    public function logout()
    {
        auth()->guard()->logout();
        return redirect()->route("auth.login_page");
    }
}
