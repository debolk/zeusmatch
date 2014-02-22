<?php

class PrivacyController extends OptionsController
{
    public function __construct()
    {
        parent::__construct();

        View::share('page_id', 'privacy');
        View::share('page_title', 'Privacy');
    }

    /**
     * Shows the privacy page
     */
    public function index()
    {
        $this->layout->with('page_id', 'privacy');
        $this->layout->content = View::make('privacy/index');
    }
}
