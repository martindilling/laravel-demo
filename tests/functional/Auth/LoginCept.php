<?php
$I = new FunctionalTester($scenario);

$I->am('a member');
$I->wantTo('login with my credentials');

$email    = 'john@example.com';
$password = 'secret';
$I->haveAnAccount(
    [
        'email'     => $email,
        'password'  => $password,
    ]
);

$I->dontSeeAuthentication();
$I->amOnRoute('login');

$I->fillField('email', $email);
$I->fillField('password', $password);
$I->click('.login input[type=submit]');

$I->seeCurrentUrlEquals('');
$I->seeElement('.alert');

$I->seeAuthentication();