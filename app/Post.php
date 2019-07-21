<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
      protected $fillable = ['content', 'image', 'user_id'];

	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
