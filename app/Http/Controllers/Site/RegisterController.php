<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site\register\index');
    }

    public function form(RegisterFormRequest $request)
    {
       User::create([
        'name' => $request->name,
        'email' => $request->email,
        'date' =>$request->date,
        'password' => Hash::make($request->password),
    ]);

    Auth::attempt([
        'email' => $request->email,
        'password' => $request->password,
    ]);
    toastr()->success('O cadastro foi efetuado com sucesso');
    return redirect()->route('site.home');

    }
}
