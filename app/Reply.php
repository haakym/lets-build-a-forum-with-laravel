<?php

namespace App;

use App\Favouritable;
use App\Favourite;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
	use Favouritable, RecordsActivity;

    protected $guarded = [];

    protected $with = ['owner', 'favourites'];
    
	public function owner()
	{
    	return $this->belongsTo(User::class, 'user_id');
	}
}
