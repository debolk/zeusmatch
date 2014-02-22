<?php

class PrivacyController extends OptionsController
{
    /**
     * Shows the privacy page
     */
    public function index()
    {
        $this->layout->with('page_id', 'privacy');
        $this->layout->content = View::make('privacy/index');
    }
}
