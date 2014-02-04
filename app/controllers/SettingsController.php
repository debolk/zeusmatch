<?php

class SettingsController extends OptionsController
{
    /**
     * Shows the settings page for the current user
     */
    public function index()
    {
        if(!Auth::check())
            return Redirect::action('SplashController@index');
        $user = Auth::user();
        $organisations = Config::get('organisations');
        $wanted = $user->organisationsWanted()->get()->toArray();
        $wanted = array_map(function($value){ return $value["organisation"]; }, $wanted);

        $this->layout->content = View::make('settings/index', array('user' => $user, 'organisations' => $organisations, 'wanted' => $wanted));
    }
}
