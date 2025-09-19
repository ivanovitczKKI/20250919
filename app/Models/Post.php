<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
		'user_id',
		'title',
		'content',
		'published_at',
		'is_published',
		'image',
	];

	public function user() {
		//many to one
		return $this->belongsTo(User::class);
	}
}
