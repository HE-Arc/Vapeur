<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the login page.
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Display the register page.
     */
    public function register()
    {
        return view('users.register');
    }

    public function logout()
    {
        session()->forget(['userId', 'username']);

        return redirect()->route('games.index');
    }

    /**
     * Attemps to login based on the request provided.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function loginInput(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'password' => 'required',
        ]);

        $name = $request->name;
        $password = $request->password;

        $user = User::where(['name' => $name])->first();
        if (!empty($user) && password_verify($password, $user->password)) {
            session(['userId' => $user->id, 'username' => $user->name]);

            return redirect()->route('games.index');
        }

        return redirect()
            ->route('users.login')
            ->with('error', 'The username or password are incorrect.');
    }

    /**
     * Attempt to register account based on the request provided.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function registerInput(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $existingUser = User::where(['name' => $request->name])->first();
        if (empty($existingUser)) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = password_hash(
                $request->password,
                PASSWORD_DEFAULT
            );
            $user->save();

            return redirect()
                ->route('users.login')
                ->with('success', 'User created successfully!');
        }

        return redirect()
            ->route('users.register')
            ->with('error', 'Username has already been taken.');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()
            ->route('users.login')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
