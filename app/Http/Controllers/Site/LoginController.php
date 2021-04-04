<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site\login\index');
    }

    public function form(LoginFormRequest $request)
    {
        var_dump($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials);
        toastr()->success('O login foi efetuado com sucesso');
        return redirect()->route('site.home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
