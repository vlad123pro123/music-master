<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->only(['email', 'password']), $request->filled('remember'))) {
            $request->session()->regenerate();

            return redirect()->back()->with('success', 'Вы успешно вошли в аккаунт!');
        }

        return redirect()->back()->with('danger', 'Вы не зарегистрированы');
    }
}
