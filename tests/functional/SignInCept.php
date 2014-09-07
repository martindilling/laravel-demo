<?php
$I = new FunctionalTester($scenario);

$I->am('a guest');
$I->wantTo('sign in to the website');

$email    = 'john@example.com';
$password = 'secret';
$I->haveAnAccount(
    [
        'id'        => 1,
        'firstname' => 'John',
        'lastname'  => 'Doe',
        'email'     => $email,
        'password'  => $password,
    ]
);

$I->dontSeeAuthentication();
$I->amOnRoute('login');

$I->fillField('email', $email);
$I->fillField('password', $password);
//$I->click('Sign me in');
$I->click('Sign me in');

$I->seeCurrentUrlEquals('');
$I->seeElement('.alert');

$I->seeAuthentication();