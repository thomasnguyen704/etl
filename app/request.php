<?php

namespace etl;

use Illuminate\Database\Eloquent\Model;

class request extends Model {
	protected $table = 'requests';
	
	/*
    public function user() {
        # request belongs to User
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('user');
    }
    */
}