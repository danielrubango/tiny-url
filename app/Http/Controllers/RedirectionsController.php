<?php

namespace App\Http\Controllers;

use App\ShortUrl;
use Illuminate\Http\Request;

class RedirectionsController extends Controller
{
    public function process(ShortUrl $url) {
    	return redirect(
    		$url->where(['short_url' => url()->current()])
    		    ->first()
    		    ->real_url
    	);
    }
}
