<?php

class MatchController extends BaseController
{
    /**
     * Shows the main matching page
     */
    public function index()
    {
        if(!Auth::check())
            return Redirect::action('SplashController@index');

        $user = User::random()->first();
        $birth = new DateTime($user['birthday']);
        $now = new DateTime();
        $age = $now->diff($birth);

        $this->layout->content = View::make('match/index', array('user' => $user, 'age' => $age));
    }
}
