<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function () {
    return response()->json(['test' => 'test'])	;
});


Route::get('/call', function () {
		$client = new \GuzzleHttp\Client();
	    $response = $client->request('GET', 'http://guzzletest.dev/test',
	    					 ['debug' => true]
	    			);
	    dd($response); 
});
