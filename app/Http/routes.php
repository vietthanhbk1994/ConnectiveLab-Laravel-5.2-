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


//Route::auth();




Route::get('/', 'HomeController@index')->name('home');


/*
  |--------------------------------------------------------------------------
  | API routes
  |--------------------------------------------------------------------------
 */

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::group(['middleware' => ['login']], function () {
    Route::get('admin', function () {
        return view('admin.welcome');
    });


    /*
     * ----------------------------
     * CREATE: Ngo-Viet-Thanh
     * DATE: 03/08/2016
     * CONTENT: Route feedback
     * ----------------------------
     */

    Route::resource('admin/feedbacks', 'FeedbackController');
    Route::get('feedback/get', 'FeedbackController@get')->name('feedback.get');
    /*
     * ----------------------------
     * CREATE: Pham Thi Duyen
     * DATE: 03/08/2016
     * CONTENT: Route Technology
     * ----------------------------
     */
    // Technology
    Route::resource('admin/technologies', 'TechnologyController');
    Route::get('technology/get', 'TechnologyController@get')->name('technology.get');
  /*
     * ----------------------------
     * CREATE: Hoàng Tuấn Nhân
     * DATE: 03/08/2016
     * CONTENT: Route Services
     * ----------------------------
     */
    // Services
    Route::resource('admin/services', 'ServiceController');
    Route::get('service/get', 'ServiceController@get')->name('service.get');
    /**
    *----------------------------
    * CREATE: VuNgocSon
    * DATE: 2-8-1026
    * CONTENT: Add team and member management
    *----------------------------
    */
    Route::resource('admin/teams', 'TeamController');
    Route::get('team/getIndex', 'TeamController@getIndex')->name('team.getIndex');
    Route::resource('admin/members', 'MemberController');
    Route::get('member/getIndex', 'MemberController@getIndex')->name('member.getIndex');
});
/*
 * ----------------------------
 * CREATE: Ngo-Viet-Thanh
 * DATE: 02/08/2016
 * CONTENT: Route contact
 * ----------------------------
 */
Route::resource('contacts', 'ContactController');


