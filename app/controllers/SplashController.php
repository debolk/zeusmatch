<?php

class SplashController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        View::share('page_id', 'splash');

        $this->layout = View::make('layouts/splash');
        $this->layout->nest('header', 'layouts/_header');
        $this->layout->nest('footer', 'layouts/_footer');
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
