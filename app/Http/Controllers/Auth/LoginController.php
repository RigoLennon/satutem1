<?php

namespace SATUTeM\Http\Controllers\Auth;

use SATUTeM\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected function authenticated(Request $request, $user)
    {
        return redirect('/create/declaracion');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    protected function credentials(\Illuminate\Http\Request $request)
    {
        //return $request->only($this->username(), 'password');
        return ['username' => $request->{$this->username()}, 'password' => $request->password, 'status' => 1];

        if (Auth::attempt($credentials)) // use the inbuilt Auth::attempt method to log in the user ( if the credentials are wrong, this will fail )
            return Redirect::to('account')->with('alert-success', 'You are now logged in.'); // if the credentials were correct, Auth::attempt will log in the user automatically and you can redirect the user to the intended page. Moreover, using the ->with() method, you can store a message in a session, which can be accessed on the next page. (se explanation under)

        $errors = new MessageBag(['password' => ['Email and/or password invalid.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

        return Redirect::back()->withErrors($errors)->withInput(Input::except('password')); // redirect back to the login page, using ->withErrors($errors) you send the error created above
    }
}
