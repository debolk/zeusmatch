<?php
class Like extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'likes';

	public function user() {
		return $this->belongsTo('User');
	}
}
