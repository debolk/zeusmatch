<?php

class SettingsController extends OptionsController
{
    /**
     * Shows the settings page for the current user
     */
    public function index()
    {
        $this->layout->with('page_id', 'settings');

        if(!Auth::check())
            return Redirect::action('SplashController@index');
        $user = Auth::user();
        $organisations = Config::get('organisations');
        $wanted = $user->organisationsWanted()->get()->toArray();
        $wanted = array_map(function($value){ return $value["organisation"]; }, $wanted);

        $this->layout->content = View::make('settings/index', array('user' => $user, 'organisations' => $organisations, 'wanted' => $wanted));
    }

    /**
     * Updates the settings of the user
     */
    public function save()
    {
        $input = Input::all();
        $user = Auth::user();
        $birth = strtotime($input["birthdate"]);
        if($birth)
            $user->birthday = strftime("%Y-%m-%d",$birth);
        if($input["gender"] == "m")
            $user->gender = "M";
        if($input["gender"] == "f")
            $user->gender = "F";

        if(preg_match("#06\d{8}#", $input["telephone"]))
            $user->telephone = $input["telephone"];

        $orgs = Config::get('organisations');

        if(array_key_exists($input["organisation"], $orgs))
            $user->organisation = $input["organisation"];

        $user->gender_wanted_male = array_key_exists("gender_wanted_male", $input);
        $user->gender_wanted_female = array_key_exists("gender_wanted_female", $input);

        $user->organisationsWanted()->delete();
        foreach($orgs as $name => $html)
        {
            if(!array_key_exists("orgwanted_" . $name, $input))
                continue;

            $pref = new OrganisationWanted();
            $pref->organisation = $name;
            $user->organisationsWanted()->save($pref);
        }
        
        $user->save();
        return;
    }

    /**
     * Deletes the profile of the user
     */
    public function delete()
    {
        if(!Auth::check())
            return Redirect::action('SplashController@index');

    }
}

