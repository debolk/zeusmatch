<?php
class Like extends Eloquent
{
    /**
     * The attributes that can be filled through mass-assignment
     * @var array
     */
    protected $fillable = ['from_id', 'to_id', 'matched_at', 'positive'];

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
