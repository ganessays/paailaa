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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
//
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','Frontend\HomeController@index');
Route::get('collage-profile','Frontend\CollageProfileController@collage_profile');
Route::get('collage-gallery','Frontend\CollageProfileController@collage_gallery');
Route::get('collage-admission','Frontend\CollageProfileController@collage_admission');
Route::get('login','Frontend\HomeController@getlogin');
Route::post('login','Frontend\HomeController@postlogin');
Route::post('register','Frontend\HomeController@candidate_signup');



/* ================================================ Candidate Controller Start============================================================== */
Route::group(['middleware'=>['candidate','verified'],'prefix'=>'candidate','namespace'=>'Candidate'],function(){
    Route::get('','CandidateController@index');
    Route::get('personal-profile','CandidateController@personal_profile');

});
/* ############################################ Candidate Controller End ################################################*/

