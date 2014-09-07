<?php
namespace Codeception\Module;

use Laracasts\TestDummy\Factory as TestDummy;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class FunctionalHelper extends \Codeception\Module
{

    public function amLoggedIn($overrides = [])
    {
        $I = $this->getModule('Laravel4');
        $I->amLoggedAs($this->haveAnAccount($overrides));
    }

    public function haveAnAccount($overrides = [])
    {
        return $this->haveAUser($overrides);
    }

    public function haveAUser($overrides = [])
    {
        return $this->have('MDH\Users\User', $overrides);
    }

    public function haveARole($overrides = [])
    {
        return $this->have('MDH\Roles\Role', $overrides);
    }

    public function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }

    public function seeLinkWithHref($href)
    {
        $I = $this->getModule('Laravel4');
        $I->seeElement("a[href*='{$href}']");
    }

    public function seeFormWithAction($action)
    {
        $I = $this->getModule('Laravel4');
        $I->seeElement("form[action$='{$action}']");
    }
}