<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortUrl extends Model
{
 	public $table = "shorts_urls";

 	public $fillable = [ 'real_url', 'short_url' ];
}
