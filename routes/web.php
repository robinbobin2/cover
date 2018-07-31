<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use VK\Client\VKApiClient;
use VK\OAuth\Scopes\VKOAuthUserScope;
use VK\OAuth\VKOAuth;
use VK\OAuth\VKOAuthDisplay;
use VK\OAuth\VKOAuthResponseType;


Route::get('/vk', function() {
	$vk = new VKApiClient( '5.80' );
	$oauth = new VKOAuth('5.80');
	$client_id = 6647455; 
	$redirect_uri = 'https://api.vk.com/blank.html'; 
	$client_secret = 'SDAScasd' ;
	$display = VKOAuthDisplay::PAGE; 
	$scope = array(VKOAuthUserScope::WALL, VKOAuthUserScope::GROUPS); 
	$state = 'SDAScasd'; 
	if (isset($_REQUEST['code'])) {
			
	    $code = $_REQUEST['code'];
	    $response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code); 
		$access_token = $response['access_token'];
		echo $code;
		return $access_token;
	}

	$browser_url = $oauth->getAuthorizeUrl(VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope, $state);
		
	return $browser_url;
});