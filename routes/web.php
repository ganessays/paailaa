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
Route::get('login','Frontend\HomeController@getlogin');
Route::post('login','Frontend\HomeController@postlogin');
Route::post('register','Frontend\HomeController@candidate_signup');

//*================Collage profile*============================
Route::get('info','Frontend\CollageProfileController@collage_info');
Route::get('course-fee','Frontend\CollageProfileController@course_fee');
Route::get('results','Frontend\CollageProfileController@results');
Route::get('faculty','Frontend\CollageProfileController@faculty');
Route::get('collage-profile','Frontend\CollageProfileController@collage_profile');
Route::get('collage-gallery','Frontend\CollageProfileController@collage_gallery');
Route::get('collage-admission','Frontend\CollageProfileController@collage_admission');
Route::get('news-article','Frontend\CollageProfileController@news_articles');
Route::get('scholarship','Frontend\CollageProfileController@scholarship');
Route::get('placement','Frontend\CollageProfileController@placement');
Route::get('department','Frontend\CollageProfileController@department');
Route::get('review','Frontend\CollageProfileController@review');
Route::get('hostel','Frontend\CollageProfileController@hostel');
//*=================================list Collage start =================================
Route::any('list-collage','Frontend\ListingCollageController@list_collage');
Route::any('contact-us','Frontend\ListingCollageController@contact_us');
Route::any('news','Frontend\ListingCollageController@news');
//*=================================list Collage End=================================

/* ================================================ Candidate Controller Start============================================================== */
Route::group(['middleware'=>['candidate','verified'],'prefix'=>'candidate','namespace'=>'Backend\Candidate'],function(){
    Route::get('','CandidateController@index');
    Route::get('personal-profile','CandidateController@personal_profile');

});
/* ############################################ Candidate Controller End ################################################*/

/* ================================================ SuperAdmin Controller Start============================================================== */
Route::group(['middleware'=>['superadmin','verified'],'prefix'=>'superadmin','namespace'=>'Backend\SuperAdmin'],function(){
    Route::get('','SuperAdminController@index');

});
/* ############################################ SuperAdmin Controller End ################################################*/


/* ================================================ Admin Controller Start============================================================== */
Route::group(['middleware'=>['admin','verified'],'prefix'=>'admin','namespace'=>'Backend\Admin'],function(){
    Route::get('','AdminController@index');

});
/* ############################################ Admin Controller End ################################################*/

