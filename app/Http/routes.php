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

Route::get('/', function () {
    return view('home');
});

// Socialite Login routes 

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

//Routes for User Profile image

Route::get('/profileimage' , 'UserProfileController@profileImage');
Route::post('/profileimage' , 'UserProfileController@profileImageUpload');

//Routes for Chat 

Route::get('/messages', [
    'as' => 'messages', 
    'uses' => 'ChatController@index']);

Route::get('/messages/{id}', [
    'as' => 'messages.show', 
    'uses' => 'ChatController@show']);

Route::get('/chat/{username}' , [
    
    'uses' => 'ChatController@userchat',
    'middleware' => 'auth'

    ]);

 Route::put('/messages/{id}', [
    'as' => 'messages.update', 
    'uses' => 'ChatController@update']);

Route::post('/chat',
    [

        'as' => 'message.store',
        'uses' => 'ChatController@store',
        'middleware' => 'auth'

    ]);

//Route::post('/chat/{username}', ['as' => 'messages.store', 'uses' => 'ChatController@store']);
// Below route is for changing the user Profile settings 

Route::get('/user-prof', 'HomeController@userprofile');

Route::post('/update-details' , 'UserProfileController@prof_details');

Route::get('/change-password' , function()

	{
		return view('change-password');
	});

Route::get('/home', [
    'uses' => 'HomeController@index',
    'as' => 'home',
    'middleware' => 'auth'
]);

Route::get('/unsayd', [
    'uses' => 'PostController@showPost',
    'as' => 'unsayd',
    'middleware' => 'auth'
]);

Route::get('/delete-post/{post_id}', [
    'uses' => 'PostController@deletePost',
    'as' => 'post.delete',
    'middleware' => 'auth'
]);

Route::post('/edit', [
    'uses' => 'PostController@editPost',
    'as' => 'edit'
]);

Route::post('/like', [
    'uses' => 'PostController@likePost',
    'as' => 'like'
]);


Route::get('/profile/{username}', [
    'uses'=>'PostController@showProfile',
    'as'=>'userprofile',
    'middleware'=>'auth'

]);

Route::post('/password-change','UserProfileController@password_change');

Route::post('/user-post','PostController@post');

Route::auth();

Route::get('/current_user' , 'UserProfileController@current_user');

