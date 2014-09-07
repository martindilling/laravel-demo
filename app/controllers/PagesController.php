<?php

class PagesController extends BaseController
{
    /**
     * Show the Dashboard page
     *
     * @return Response
     */
    public function dashboard()
    {
        return View::make('pages.dashboard');
    }
}
