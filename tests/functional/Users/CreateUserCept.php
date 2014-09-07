<?php
$I = new FunctionalTester($scenario);

$I->am('a member');
$I->wantTo('create a new user');

$I->amLoggedIn();
$role1 = $I->haveARole();
$role2 = $I->haveARole();

$I->amOnPage('users/create');

$I->see($role1->name);
$I->see($role2->name);

$firstname = 'Jane';
$lastname  = 'Smith';
$email     = 'jane@example.com';
$password  = 'secret';

$I->fillField('firstname', $firstname);
$I->fillField('lastname', $lastname);
$I->fillField('email', $email);
$I->fillField('password', $password);
$I->checkOption('input[type=checkbox][value=' . $role2->machinename . ']');
$I->click('input[type=submit]');

$I->seeCurrentUrlEquals('/users');
$I->seeElement('.alert');
$I->see('Jane Smith');
$I->see('jane@example.com');
$I->seeRecord('users',
    [
        'firstname' => $firstname,
        'lastname'  => $lastname,
        'email'     => $email,
    ]
);
$I->dontSeeRecord('users',
    [
        'password' => $password
    ]
);
$I->seeRecord('role_user', [
    'role_id' => $role2->id
]);