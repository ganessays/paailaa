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
Route::get('gallery','Frontend\CollageProfileController@gallery');
Route::get('collage-admission','Frontend\CollageProfileController@collage_admission');
Route::get('news','Frontend\HomeController@news');
//Route::get('news-article','Frontend\CollageProfileController@news_articles');
Route::get('scholarship','Frontend\CollageProfileController@scholarship');
Route::get('placement','Frontend\CollageProfileController@placement');
Route::get('department','Frontend\CollageProfileController@department');
Route::get('review','Frontend\CollageProfileController@review');
Route::get('hostel','Frontend\CollageProfileController@hostel');
//*=================================list Collage start =================================
Route::any('list-collage','Frontend\ListingCollageController@list_collage');
Route::any('list-consultancy','Frontend\ListingCollageController@list_consultancy');
Route::any('contact-us','Frontend\ListingCollageController@contact_us');

//*=================================list Collage End=================================
Route::get('education','Frontend\EducationController@education_list');
//*=================================Front Events Controller=================================
Route::get('events','Frontend\EventsController@events_show');
Route::get('sports','Frontend\SportsController@sports');



//*=================================Profile news view=================================
Route::get('news/{slug}','Frontend\CollageProfileController@news_view');




/* ================================================ Candidate Controller Start============================================================== */
Route::group(['middleware'=>['candidate','verified'],'prefix'=>'candidate','namespace'=>'Backend\Candidate'],function(){
    Route::get('','CandidateController@index');
    Route::get('personal-profile','CandidateController@personal_profile');

});
/* ############################################ Candidate Controller End ################################################*/

/* ================================================ SuperAdmin Controller Start============================================================== */
Route::group(['middleware'=>['superadmin','verified'],'prefix'=>'superadmin','namespace'=>'Backend\SuperAdmin'],function(){
    Route::get('','SuperAdminController@index');
/*College Control*/
    Route::any('add-college','Directory\DirectoryController@index');
    Route::any('list-college','Directory\DirectoryController@list');
    Route::get('list-college/college_id={id}/edit','Directory\DirectoryController@edit');
    Route::post('list-college/college_id={id}/edit','Directory\DirectoryController@update');
    Route::post('list-college/{id}/updateClientStatus','Directory\DirectoryController@updateClientStatus');
/*Consultancy*/
    Route::any('add-consultancy','Directory\DirectoryController@index');
    Route::any('list-consultancy','Directory\ConsultancyController@list_consultancy');
    Route::get('list-consultancy/consultancy_id={id}/edit','Directory\ConsultancyController@edit');
    Route::post('list-consultancy/consultancy_id={id}/edit','Directory\DirectoryController@update');
    Route::post('list-consultancy/{id}/updateClientStatus','Directory\ConsultancyController@updateClientStatus');
   /*University*/
    Route::any('add-university','Directory\DirectoryController@index');
    Route::any('list-university','Directory\UniversityController@list_university');
   /*School*/
    Route::any('add-school','Directory\DirectoryController@index');
    Route::any('list-school','Directory\SchoolController@list_school');


    /* ============================== Location Managment ========================================= */
    Route::get('countries','Location\CountryController@index');
    Route::post('countries','Location\CountryController@store');
    Route::get('countries/country_id={id}/edit','Location\CountryController@edit');
    Route::post('countries/country_id={id}/edit','Location\CountryController@update');
    Route::get('states','Location\StateController@index');
    Route::post('states','Location\StateController@store');
    Route::get('states/state_id={id}/edit','Location\StateController@edit');
    Route::post('states/state_id={id}/edit','Location\StateController@update');
    Route::get('district','Location\DistrictController@index');
    Route::post('district','Location\DistrictController@store');
    Route::get('district/district_id={id}/edit','Location\DistrictController@edit');
    Route::post('district/district_id={id}/edit','Location\DistrictController@update');
    /* ============================== Location Managment ========================================= */

    /* ============================== Company-Natrue ========================================= */
    Route::get('company-nature','Nature\CompanyNatureController@index');
    Route::post('company-nature','Nature\CompanyNatureController@store');
    Route::get('company-nature/nature_id={id}/edit','Nature\CompanyNatureController@edit');
    Route::post('company-nature/nature_id={id}/edit','Nature\CompanyNatureController@update');
    /* ============================== Events start========================================= */
    Route::get('add-event','Events\EventController@create');
    Route::post('add-event','Events\EventController@store');
    Route::get('list-event','Events\EventController@list');
    Route::get('list-event/{slug}/edit','Events\EventController@edit');
    Route::post('list-event/{slug}/edit','Events\EventController@update_event');
    Route::get('list-event/{slug}/delete','Events\EventController@delete');
    /* ============================== Events end========================================= */

    /* ============================== Company-Natrue end========================================= */


    /* ============================== Faculty ========================================= */
    Route::get('add-faculty','FacultyCourses\FacultyController@create');
    Route::post('add-faculty','FacultyCourses\FacultyController@store');
    Route::get('add-faculty/faculty_id={id}/edit','FacultyCourses\FacultyController@edit');
    Route::post('add-faculty/faculty_id={id}/edit','FacultyCourses\FacultyController@update');

    Route::get('client-faculty','FacultyCourses\FacultyController@client_faculty');
    Route::post('client-faculty','FacultyCourses\FacultyController@post_client_faculty');


/* ============================== courses ========================================= */
    Route::get('add-courses','FacultyCourses\CoursesController@create');
    Route::post('add-courses','FacultyCourses\CoursesController@store');
    Route::get('add-courses/courses_id={id}/edit','FacultyCourses\CoursesController@edit');
    Route::post('add-courses/courses_id={id}/edit','FacultyCourses\CoursesController@update');
    /* ============================== Category ========================================= */
    Route::get('add-category','Category\CategoryController@create');
    Route::post('add-category','Category\CategoryController@store');
    Route::get('add-category/category_id={id}/edit','Category\CategoryController@edit');
    Route::post('add-category/category_id={id}/edit','Category\CategoryController@update');
    /* ============================== Events Type========================================= */
    Route::get('add-event-type','Events\EventTypeController@create');
    Route::post('add-event-type','Events\EventTypeController@store');
    Route::get('add-event-type/events_type={id}/edit','Events\EventTypeController@edit');
    Route::post('add-event-type/events_type={id}/edit','Events\EventTypeController@update');
    /* ============================== Post crate========================================= */
    Route::get('create-post','Post\PostController@create');
    Route::post('create-post','Post\PostController@store');
    Route::get('list-post','Post\PostController@list');
    Route::get('list-post/post_id={id}/edit','Post\PostController@edit');
    Route::post('list-post/post_id={id}/edit','Post\PostController@update');
/*==============================Post =================================*/
    Route::get('add-tag','Post\TagController@index');
    Route::post('add-tag','Post\TagController@store');
    Route::get('add-tag/tag_id={id}/edit','Post\TagController@edit');
    Route::post('add-tag/tag_id={id}/edit','Post\TagController@update');
    /*==============================Facility=================================*/
    Route::get('add-facility','Facility\FacilityController@index');
    Route::post('add-facility','Facility\FacilityController@store');
    Route::get('list-facility','Facility\FacilityController@list');
    Route::get('list-facility/facility_id={id}/edit','Facility\FacilityController@edit');
    Route::post('list-facility/facility_id={id}/edit','Facility\FacilityController@update');
});
/* ############################################ SuperAdmin Controller End ################################################*/


/* ================================================ Admin Controller Start============================================================== */
Route::group(['middleware'=>['admin','verified'],'prefix'=>'admin','namespace'=>'Backend\Admin'],function(){
    Route::get('','AdminController@index');

});
/* ############################################ Client Controller End ################################################*/
Route::group(['middleware'=>['client','verified'],'prefix'=>'client','namespace'=>'Backend\Client'],function(){
    Route::get('','ClientController@index');
    /*Profile Manage*/
    Route::get('profile','ClientController@profile');
    Route::post('profile','ClientController@update');

    Route::get('create-post','PostController@create');
    Route::post('create-post','PostController@store');
    Route::get('list-post','PostController@list');
    Route::get('list-post/post-edit={id}/edit','PostController@edit');
    Route::post('list-post/post-edit={id}/edit','PostController@update');
    Route::get('list-post/post-delete={id}/delete','PostController@delete');

    Route::get('facilities','FacilityController@index');
    Route::post('add_facilities','FacilityController@store');
    Route::get('facilities/facilities={id}/delete','FacilityController@delete');

    Route::get('galleries','GalleryController@index');
    Route::post('add_galleries','GalleryController@store');
    Route::get('galleries/galleries={id}/delete','GalleryController@delete');

    Route::post('add_gallery_cat','GalleryController@add_gallery_cat');
    Route::get('galleries/cat_id={id}/edit','GalleryController@edit_gallery_cat');
    Route::post('galleries/cat_id={id}/edit','GalleryController@update_gallery_cat');

    Route::get('courses-fees','CoursesController@create');
    Route::post('courses-fees','CoursesController@store');
    Route::get('courses-list','CoursesController@list_courses');
    Route::get('courses-list/courses_id={id}/edit','CoursesController@edit');
    Route::post('courses-list/courses_id={id}/edit','CoursesController@update');
    Route::any('faculty_name',function (){
        $faculties_id = Illuminate\Support\Facades\Input::get('faculty_id');
        $course_name = \App\Course::orderBy('name','ASC')->where('faculty_id', '=', $faculties_id)->get();
        return Response::json($course_name);
    });

    Route::get('highlights','ClientController@highlights');

    /*Faculty Controller*/
    Route::get('faculty','FacultyController@index');
});
/* ############################################ Admin Controller End ################################################*/
Route::any('{UserName}','Frontend\HomeController@overview');
Route::any('{UserName}/course-fee','Frontend\CollageProfileController@course_fee');
Route::any('{UserName}/facility','Frontend\CollageProfileController@facility');
Route::any('{UserName}/faculty','Frontend\CollageProfileController@faculty');
Route::any('{UserName}/gallery','Frontend\CollageProfileController@gallery');
Route::any('{UserName}/news-article','Frontend\CollageProfileController@news_articles');
Route::any('{UserName}/{slug}/news-article','Frontend\CollageProfileController@news_articles_details');
