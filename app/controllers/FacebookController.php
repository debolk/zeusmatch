<?php

class FacebookController extends BaseController {

	public function redirectLogin()
	{
		$facebook = new Facebook(Config::get('facebook'));
		$params = array(
			'redirect_uri' => url('/login/callback'),
			'scope' => 'email,user_location,user_relationships,user_about_me,user_birthday,user_games_activity',
		);
		return Redirect::to($facebook->getLoginUrl($params));
	}

	public function processLogin()
	{
		$code = Input::get('code');
		if (strlen($code) == 0) return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
		 
		$facebook = new Facebook(Config::get('facebook'));
		$uid = $facebook->getUser();

		if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

		$me = $facebook->api('/me');

		$user = User::Where('facebook_id', '=', $uid)->first();
		if(!$user)
		{
			$user = new User();
			$user->facebook_id = $uid;
		}

		// Update user
		$user->name = $me['first_name'] . ' ' . $me['last_name'];
		$user->email = $me['email'];

		$user->save();
		Auth::login($user);
		dd($user);
	}

}
