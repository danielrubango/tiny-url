<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortUrl;

class UrlShortenerController extends Controller
{
    public function index() {
    	return view('shorts_urls.index');
    }

    public function save(Request $request, ShortUrl $url) {
    	$request->validate([
    		'url' => 'url'
    	]);

    	$real_url = '';
    	$short_url = route('home')."/".str_random(10);

    	if (!$url->where(['real_url' => $request->url])->exists()) {
    		$url->create([
	    		'real_url' => $request->url,
	    		'short_url' => $short_url
	    	]);
    	}

    	return view('shorts_urls.index', ['url' => $url->where(['real_url' => $request->url])->first()]);
    }
}
