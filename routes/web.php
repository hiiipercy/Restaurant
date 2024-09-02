<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes([
    'password.confirm' => false, // 404 disabled
    'password.email'   => false, // 404 disabled
    'password.request' => false, // 404 disabled
    'password.reset'   => false, // 404 disabled
    'register'         => false, // 404 disabled
]);

    // Dashboard Route
    Route::get('/','FrontendController@index')->name('index');
    // Route::get('/pieChart','ChartController@pieChart')->name('pieChart');

    Route::group(['prefix'=>'restaurant/','as'=>'restaurant.'],function(){
        Route::get('home','FrontendController@home')->name('home');
        Route::get('about','FrontendController@about')->name('about');
        Route::get('menu','FrontendController@menu')->name('menu');
        Route::get('special','FrontendController@special')->name('special');
        Route::get('event','FrontendController@event')->name('event');
        Route::get('chef','FrontendController@chef')->name('chef');
        Route::get('gallery','FrontendController@gallery')->name('gallery');
        Route::get('contact','FrontendController@contact')->name('contact');
        // Route::get('table','FrontendController@table')->name('table');
    });

Route::group(['as'=>'app.','middleware'=>['auth']],function(){
    // Dashboard Route
    Route::get('/admin','backendController@index')->name('index');

        // User Routes
        Route::group(['as'=>'user.','prefix'=>'user/'], function(){
            Route::get('/','UserController@index')->name('index');
            Route::post('update-or-store','UserController@updateOrStore')->name('update-or-store');
            Route::post('edit','UserController@edit')->name('edit');
            Route::post('delete','UserController@delete')->name('delete');
            Route::post('bulk-delete','UserController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','UserController@statusChange')->name('status-change');
            Route::get('import','UserController@import')->name('import');
            Route::post('import-data','UserController@importData')->name('import-data');
        });

         // hero Routes
         Route::group(['as'=>'heroes.','prefix'=>'heroes/'], function(){
            Route::get('/','HeroController@index')->name('index');
            Route::post('update-or-store','HeroController@updateOrStore')->name('update-or-store');
            Route::post('edit','HeroController@edit')->name('edit');
            Route::post('delete','HeroController@delete')->name('delete');
            Route::post('bulk-delete','HeroController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','HeroController@statusChange')->name('status-change');
        });

        // Menu Routes
        Route::group(['as'=>'menu.','prefix'=>'menu/'], function(){
            Route::get('/','MenuController@index')->name('index');
            Route::post('update-or-store','MenuController@updateOrStore')->name('update-or-store');
            Route::post('edit','MenuController@edit')->name('edit');
            Route::post('delete','MenuController@delete')->name('delete');
            Route::post('bulk-delete','MenuController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','MenuController@statusChange')->name('status-change');
        });

           // Special Routes
           Route::group(['as'=>'special.','prefix'=>'special/'], function(){
            Route::get('/','SpecialController@index')->name('index');
            Route::post('update-or-store','SpecialController@updateOrStore')->name('update-or-store');
            Route::post('edit','SpecialController@edit')->name('edit');
            Route::post('delete','SpecialController@delete')->name('delete');
            Route::post('bulk-delete','SpecialController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','SpecialController@statusChange')->name('status-change');

        });

            // Event Routes
            Route::group(['as'=>'event.','prefix'=>'event/'], function(){
            Route::get('/','EventController@index')->name('index');
            Route::post('update-or-store','EventController@updateOrStore')->name('update-or-store');
            Route::post('edit','EventController@edit')->name('edit');
            Route::post('delete','EventController@delete')->name('delete');
            Route::post('bulk-delete','EventController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','EventController@statusChange')->name('status-change');

        });

         // Gallery Routes
         Route::group(['as'=>'gallery.','prefix'=>'gallery/'], function(){
            Route::get('/','GalleryController@index')->name('index');
            Route::post('update-or-store','GalleryController@updateOrStore')->name('update-or-store');
            Route::post('edit','GalleryController@edit')->name('edit');
            Route::post('delete','GalleryController@delete')->name('delete');
            Route::post('bulk-delete','GalleryController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','GalleryController@statusChange')->name('status-change');

        });

          // chef Routes
          Route::group(['as'=>'chef.','prefix'=>'chef/'], function(){
            Route::get('/','ChefController@index')->name('index');
            Route::post('update-or-store','ChefController@updateOrStore')->name('update-or-store');
            Route::post('edit','ChefController@edit')->name('edit');
            Route::post('delete','ChefController@delete')->name('delete');
            Route::post('bulk-delete','ChefController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','ChefController@statusChange')->name('status-change');

        });

        // testimonial Routes
        Route::group(['as'=>'testimonial.','prefix'=>'testimonial/'], function(){
            Route::get('/','TestimonialController@index')->name('index');
            Route::post('update-or-store','TestimonialController@updateOrStore')->name('update-or-store');
            Route::post('edit','TestimonialController@edit')->name('edit');
            Route::post('delete','TestimonialController@delete')->name('delete');
            Route::post('bulk-delete','TestimonialController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','TestimonialController@statusChange')->name('status-change');

        });

          // contact Routes
          Route::group(['as'=>'contact.','prefix'=>'contact/'], function(){
            Route::get('/','TestimonialController@index')->name('index');
            Route::post('update-or-store','TestimonialController@updateOrStore')->name('update-or-store');
            Route::post('edit','TestimonialController@edit')->name('edit');
            Route::post('delete','TestimonialController@delete')->name('delete');
            Route::post('bulk-delete','TestimonialController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','TestimonialController@statusChange')->name('status-change');

        });

         // whyus Routes
         Route::group(['as'=>'whyus.','prefix'=>'whyus/'], function(){
            Route::get('/','WhyusController@index')->name('index');
            Route::post('update-or-store','WhyusController@updateOrStore')->name('update-or-store');
            Route::post('edit','WhyusController@edit')->name('edit');
            Route::post('delete','WhyusController@delete')->name('delete');
            Route::post('bulk-delete','WhyusController@bulkDelete')->name('bulk-delete');
            Route::post('status-change','WhyusController@statusChange')->name('status-change');
        });

         // about Routes
         Route::group(['as'=>'abouts.','prefix'=>'abouts/'], function(){
            Route::get('/','AboutController@index')->name('index');
            Route::post('update-or-store','AboutController@updateOrStore')->name('update-or-store');
        });


    // Profile Routes
    Route::get('my-profile', 'ProfileController@my_profile')->name('profile.index');
    Route::post('my-profile/update', 'ProfileController@my_profile_update')->name('profile.update');
    Route::post('password-update', 'ProfileController@change_password')->name('password.update');
   
    // Branch Routes
    // Route::group(['prefix'=>'branchs/','as'=>'branch.'],function(){
    //     Route::get('/','BranchController@index')->name('index');
    //     Route::post('update-or-store','BranchController@updateOrStore')->name('update-or-store');
    //     Route::post('edit','BranchController@edit')->name('edit');
    //     Route::post('delete','BranchController@delete')->name('delete');
    //     Route::post('bulk-delete','BranchController@bulkDelete')->name('bulk-delete');
    //     Route::post('status-change','BranchController@statusChange')->name('status-change');
    //     Route::get('import','BranchController@import')->name('import');
    //     Route::post('import-data','BranchController@importData')->name('import-data');
    // });

});
