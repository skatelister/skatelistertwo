<?php

use Carbon\Carbon;

class Post extends Eloquent
{
	protected $table = 'posts';
	protected $fillable = ['title', 'category', 'image', 'description'];


	public function user() 
	{
		return $this->belongsTo('User');
	}
}