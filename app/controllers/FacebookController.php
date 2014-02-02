<?php

class FacebookController extends BaseController {

	public function redirectLogin()
	{
		$facebook = new Facebook(Config::get('facebook'));
		$params = array(
			'redirect_uri' => url('/login/callback'),
			'scope' => 'email,user_location,user_relationships,user_about_me,user_birthday',
		);
		return Redirect::to($facebook->getLoginUrl($params));
	}

	public function processLogout()
	{
		Auth::logout();
		return Redirect::to('/');
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

			if($me['gender'] == 'male')
			{
				$user->gender = 'M';
				$user->gender_wanted_male = false;
				$user->gender_wanted_female = true;
			}
			if($me['gender'] == 'female')
			{
				$user->gender = 'F';
				$user->gender_wanted_male = true;
				$user->gender_wanted_female = false;
			}

			$relationships = array('In a relationship', 'Engaged', 'Married');
			if(in_array($me['relationship_status'], $relationships))
				$user->in_relation = true;
		}

		// Update user
		$user->name = $me['first_name'] . ' ' . $me['last_name'];
		$user->email = $me['email'];

		if($user->organisation == null)
		{
			$town = $me['location']['name'];
			$translation = array(
				'Delft' => 'Bolk',
				'Amsterdam' => 'Liber',
				'Nijmegen' => 'Karpe',
				'Utrecht' => 'Biton',
				'Groningen' => 'Cleopatra',
				'Leiden' => 'Catena',
				'Leeuwarden' => 'Wolweze',
			);
			$user->organisation = $translation[$town];
		}

		$user->access_token = $facebook->getAccessToken();

		$user->save();
		Auth::login($user);

		return Redirect::to('/')->with('message', 'Logged in with Facebook');
	}

}
