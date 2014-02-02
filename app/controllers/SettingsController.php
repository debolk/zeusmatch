<?php

class SettingsController extends OptionsController
{
    /**
     * Shows the settings page for the current user
     */
    public function index()
    {
        $this->layout->content = View::make('settings/index');
    }
}
