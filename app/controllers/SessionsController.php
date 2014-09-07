<?php

use MDH\FormValidators\SignInForm;

class SessionsController extends BaseController
{
    /**
     * @var SignInForm
     */
    private $signInForm;

    function __construct(SignInForm $signInForm)
    {
        $this->signInForm = $signInForm;
    }

    /**
     * Show the login form
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }

    /**
     * Try to login a user
     *
     * @return Response
     */
    public function store()
    {
        $credentials = Input::only('email', 'password');

        $this->signInForm->validate($credentials);

        if (!Auth::attempt($credentials, Input::get('remember_me', false))) {
            Flash::error('Incorrect credentials. Please try again!');

            return Redirect::back()->withInput();
        }

        Flash::message('Welcome back!');

        return Redirect::intended('/');
    }

    /**
     * Logout the current user
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::home();
    }
}