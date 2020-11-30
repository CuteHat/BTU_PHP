<?php


namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function submitLogin(UserRequest $request)
    {
        $credentials = $request->except(('_token'));
        if (Auth::attempt($credentials)) {
            return redirect('/quizz');
        } else {
            abort(403);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
