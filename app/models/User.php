<?php
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

Class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();
        
	/**
        * Get the password for the user.
        *
        * @return string
        */
        public function getAuthPassword()
        {
        	return $this->password;
        }

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * Gets the url for the profile picture
	 *
	 * @return string
	 */
	public function getPictureUrl()
	{
		return 'https://graph.facebook.com/' . $this->uid . '/picture';
	}

	public function organisationsWanted()
	{
		return $this->hasMany('OrganisationWanted');
	}

	public function likes()
	{
		return $this->hasMany('Like');
    }

    public static function random()
    {
        return User::orderBy(DB::raw('RAND()'));
    }

}
