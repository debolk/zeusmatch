<?php

class MatchController extends BaseController
{
    public function __construct()
    {
        $this->layout = View::make('layouts/match');
    }

    /**
     * Shows the privacy page
     */
    public function index()
    {
        if(!Auth::check())
            return Redirect::action('SplashController@index');

        $this->layout->content = View::make('match/index');
    }
}
