<?php

use MDH\FormValidators\CreateUserForm;
use MDH\Roles\Role;
use MDH\Users\User;

class UsersController extends \BaseController
{
    /**
     * @var CreateUserForm
     */
    protected $createUserForm;

    function __construct(CreateUserForm $createUserForm)
    {
        $this->createUserForm = $createUserForm;
    }

    /**
     * List all the users.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::with('roles')->latest()->get();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::all();

        return View::make('users.create', compact('roles'));
    }

    /**
     * Store a new user in the database
     *
     * @return Response
     */
    public function store()
    {
        $this->createUserForm->validate(Input::all());

        $input = Input::only('firstname', 'lastname', 'email', 'password');

        $user = User::create($input);

        $user->addRoles(Input::get('roles', []));

        Flash::message('New user was created!');

        return Redirect::route('users.index');
    }

    /**
     * Display the specified resource.
     * GET /users/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /users/{id}/edit
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /users/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /users/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Flash::message('The user was deleted!');

        return Redirect::back();
    }
}