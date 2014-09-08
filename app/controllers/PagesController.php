<?php

use MDH\Users\User;

class PagesController extends BaseController
{
    /**
     * Show the Dashboard page
     *
     * @return Response
     */
    public function dashboard()
    {
        $userCount = User::count();


        return View::make('pages.dashboard', compact('userCount'));
    }
}
