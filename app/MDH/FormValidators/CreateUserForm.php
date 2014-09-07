<?php namespace MDH\FormValidators;

class CreateUserForm extends BaseFormValidator
{
    /**
     * Validation rules for the create user form.
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required'
    ];
}