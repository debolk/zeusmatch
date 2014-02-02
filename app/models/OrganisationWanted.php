<?php
class OrganisationWanted extends Eloquent
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'organisations_wanted';

	public function user() {
		return $this->belongsTo('User');
	}
}
