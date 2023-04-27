<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\c;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * index for login via post request
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()){

            return view('auth.login');
        }
        else{
            return view('backend.index');
        }
    }
    /**
     * Login via correct email, password
     */
    public function login(AuthRequest $request)
    {
        // $validator = Validator::make($request);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->intended('admin');
        }else{
            return redirect()->route('authentication')
            ->withErrors(['email' => 'These credentials do not match our records.'])
            ->withInput($request->except('password'));
        }
    }
    /**
     *logout
     */
    public function logout()
    {
        if(Auth::user()){
            Auth::logout();
            return redirect()->intended('/');
        }else{
            return view('auth.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    // User $user
    public function show()
    {
        return view('backend/index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
