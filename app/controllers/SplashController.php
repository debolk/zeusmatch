<?php

class SplashController extends BaseController
{
    public function __construct()
    {
        $this->layout = View::make('layouts/splash');
    }

    /**
     * Shows the privacy page
     */
    public function index()
    {
        $this->layout->with('page_id', 'splash');
	if (Auth::check()) {
		return Redirect::action('MatchController@index');
	}
        $this->layout->content = View::make('splash/index');
    }
}
