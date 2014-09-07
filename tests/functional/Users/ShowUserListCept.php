<?php
$I = new FunctionalTester($scenario);

$I->am('a member');
$I->wantTo('see a list of users in the system');

$I->amLoggedIn();

$user1 = $I->haveAUser();
$user2 = $I->haveAUser([
    'firstname' => '',
    'lastname' => '',
]);

$I->amOnPage('users');

$I->see($user1->firstname . ' ' . $user1->lastname);
$I->see($user1->email);
$I->seeLinkWithHref("/users/{$user1->id}/edit");
$I->seeFormWithAction("/users/destroy?{$user1->id}");

$I->see('(unknown)');
$I->see($user2->email);
$I->seeLinkWithHref("/users/{$user2->id}/edit");
$I->seeFormWithAction("/users/destroy?{$user2->id}");
