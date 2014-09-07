<?php
$I = new FunctionalTester($scenario);

$I->am('a member');
$I->wantTo('logout from the website');

$I->amLoggedAs($I->haveAnAccount());
$I->seeAuthentication();

$I->amOnRoute('logout');

$I->seeCurrentRouteIs('login');
$I->seeElement('.alert');

$I->dontSeeAuthentication();