<?php namespace MDH\FormValidators;

class SignInForm extends BaseFormValidator
{
    /**
     * Validation rules for the sign in form.
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required'
    ];
}