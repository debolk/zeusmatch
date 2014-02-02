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
        $wanted = $user->organisationsWanted()->get();
        $wanted = array_map(function($value){ return $value[0]->organisation; }, (array)$wanted);
        $wanted = array_values($wanted);

        $this->layout->content = View::make('settings/index', array('user' => $user, 'organisations' => $organisations, 'wanted' => $wanted));
    }
}
