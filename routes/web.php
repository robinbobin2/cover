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
use VK\OAuth\Scopes\VKOAuthGroupScope;
use VK\OAuth\Scopes\VKOAuthUserScope;
use VK\OAuth\VKOAuth;
use VK\OAuth\VKOAuthDisplay;
use VK\OAuth\VKOAuthResponseType;


Route::get('/vk', function() {
	$vk = new VKApiClient( );
	$oauth = new VKOAuth( );
	$client_id = 6648037; 
	$redirect_uri = 'http://ppql.ru'; 
	$client_secret = 'TgPTV9wQmZznJ993HBTv' ;
	$display = VKOAuthDisplay::PAGE; 
	$scope = array(VKOAuthGroupScope::PHOTOS); 
	$groups_ids = array(168595662); 
	$state = '468db882468db882468db8821246e8c8674468d468db8821dedf9e742414f31643b609b'; 
	if (isset($_REQUEST['code'])) {
			
	    $code = $_REQUEST['code'];
	    $response = $oauth->getAccessToken($client_id, $client_secret, $redirect_uri, $code); 
		$access_token = $response['access_token_168595662'];
		echo $code;
		// dd( $response );
	}

	$browser_url = $oauth->getAuthorizeUrl(VKOAuthResponseType::CODE, $client_id, $redirect_uri, $display, $scope, $state, $groups_ids);

		if (!isset($access_token)) {
			echo "<a href='" . $browser_url . "'>Войти через вконтакте</a>";
			
		} else {

			$response = $vk->photos()->getOwnerCoverPhotoUploadServer($access_token, array(
				'group_id'=>168595662,
				'crop_x'=>0,
				'crop_y'=>0,
				'crop_x2'=>795,
				'crop_y2'=>200)); 
			

			
		}
		if (isset($_REQUEST['access_token'])) {
				$response = $vk->photos()->saveOwnerCoverPhoto($_REQUEST['access_token'], array('hash'=>$_REQUEST['hash'], 'photo'=>$_REQUEST['photo']));
				# code...
				dd($response);
		}
});


// Route::get('/vk', function() {
// 	$vk = new VKApiClient( );
// 	$oauth = new VKOAuth( );
// 	$client_id = 6648037; 
// 	$redirect_uri = 'http://www.ppql.ru/vk'; 
// 	$client_secret = 'TgPTV9wQmZznJ993HBTv' ;
// 	$display = VKOAuthDisplay::PAGE; 
// 	$scope = array(VKOAuthUserScope::WALL, VKOAuthUserScope::GROUPS, VKOAuthUserScope::OFFLINE, VKOAuthUserScope::EMAIL, VKOAuthUserScope::FRIENDS, VKOAuthUserScope::STATS); 
// 	$state = '468db882468db882468db8821246e8c8674468d468db8821dedf9e742414f31643b609b'; 
// 	$revoke_auth = true; 

// 	$browser_url = $oauth->getAuthorizeUrl(VKOAuthResponseType::TOKEN, $client_id, $redirect_uri, $display, $scope, $state, null, $revoke_auth);

// 		if (!isset($_REQUEST['access_token'])) {
// 			echo "<a href='" . $browser_url . "'>Войти через вконтакте</a>";
			
// 		} else {

// 			$response = $vk->account()->getProfileInfo($_REQUEST['access_token']);
// 			dd($response);
			
// 		}
// });

Auth::routes();
Route::middleware('auth')->get('/editor', function (Request $request) {
    return view('editor.index');
});
Route::get('/', 'HomeController@index')->name('home');
