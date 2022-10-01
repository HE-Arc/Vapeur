<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display the login page.
     */
    public function login()
    {
        return view("users.login");
    }

    /**
     * Display the register page.
     */
    public function register()
    {
        return redirect()->route("users.login")->with("success", "User created successfully.");
    }

    /**
     * Attemps to login based on the request provided.
     *
     * @param   \Illuminate\Http\Request    $request
     */
    public function loginInput(Request $request)
    {
        $name = $request->name;
        $password = $request->password;

        $user = User::where(['name' => $name])->first();
        if (!empty($user) && password_verify($password, $user->password)) {
            return redirect()->route("users.login")->with("success", "Logged in!");
        }
        return redirect()->route("users.login")->with("success", "The username or password are incorrect.");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.login");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route("users.login")->with("success", "User created successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
