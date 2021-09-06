<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\Site\MainController::class, 'index'])->name('home');
Route::post('contact-us', [App\Http\Controllers\Site\MainController::class, 'contactUs'])->name('contactUs');
Route::get('/set-lang/{lang}', [App\Http\Controllers\Site\MainController::class, 'switchLang'])->name('switchLang');


Route::group(['prefix' => 'admin','namespace' => 'App\Http\Controllers\Admin'],function(){

    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');

    Route::get('/switch-locale/{lang}', 'HomeController@switchLocale')->name('admin.switchLocale');


    Route::group(['middleware' => 'auth:admin'],function(){

        Route::get('/home', function(){
            return redirect()->to('admin/content/ar');
        })->name('admin.home');

        Route::get('/', function(){
            return redirect()->to('admin/content/ar');
        })->name('admin.home');


        Route::get('/content/{lang}', 'Content\ContentController@index')->name('admin.content.manage');
        Route::post('/content/update', 'Content\ContentController@update')->name('admin.content.update');
        Route::post('/content/upload-media', 'Content\ContentController@uploadMedia')->name('admin.content.upload-media');
        Route::delete('/content/delete-media/{id?}', 'Content\ContentController@deleteMedia')->name('admin.content.media.delete');

        Route::get('/content/participation-method/{id}/edit', 'Content\ContentController@editParticipationMethod')->name('admin.participation_method.edit');
        Route::post('/content/participation-method/update', 'Content\ContentController@updateParticipationMethod')->name('admin.participation_method.update');

        Route::get('/content/sample-trip/{id}/edit', 'Content\ContentController@editSampleTrip')->name('admin.sample_trip.edit');
        Route::post('/content/sample-trip/update', 'Content\ContentController@updateSampleTrip')->name('admin.sample_trip.update');

        Route::group(['prefix' => 'contact-messages','namespace' => 'ContactMessages'],function(){
            Route::match(['GET','POST'],'/', 'ContactMessageController@index')->name('admin.contact_messages.index');
           // Route::get('/{id}/show', 'ContactMessageController@getMessage')->name('admin.contact_messages.show');
        });

        Route::group(['prefix' => 'participate-bookings','namespace' => 'ParticipateBooking'],function(){
            Route::match(['GET','POST'],'/', 'ParticipateBookingController@index')->name('participate_bookings.index');
            Route::get('/{id}/show', 'ParticipateBookingController@getMessage')->name('participate_bookings.show');
        });

        Route::group(['prefix' => 'general-settings','namespace' => 'Settings'],function(){
            Route::get('/', 'GeneralSettingsController@index')->name('admin.general_settings.index');
            Route::post('/update', 'GeneralSettingsController@update')->name('admin.general_settings.update');
        });

        Route::group(['prefix' => 'logo','namespace' => 'Logo'],function(){
            Route::match(['GET','POST'],'/', 'LogoController@index')->name('admin.logo.index');
            Route::get('/create', 'LogoController@create')->name('admin.logo.create');
            Route::post('/store', 'LogoController@store')->name('admin.logo.store');
            Route::get('/{id}/edit', 'LogoController@edit')->name('admin.logo.edit');
            Route::post('update', 'LogoController@update')->name('admin.logo.update');
            Route::delete('delete/{id}', 'LogoController@delete')->name('admin.logo.delete');
        });

        Route::group(['prefix' => 'social-link','namespace' => 'SocialLink'],function(){
            Route::match(['GET','POST'],'/', 'SocialLinkController@index')->name('admin.social_link.index');
            Route::get('/create', 'SocialLinkController@create')->name('admin.social_link.create');
            Route::post('/store', 'SocialLinkController@store')->name('admin.social_link.store');
            Route::get('/{id}/edit', 'SocialLinkController@edit')->name('admin.social_link.edit');
            Route::post('update', 'SocialLinkController@update')->name('admin.social_link.update');
            Route::delete('delete/{id}', 'SocialLinkController@delete')->name('admin.social_link.delete');
        });


        Route::group(['prefix' => 'main','namespace' => 'Main'],function(){
            Route::match(['GET','POST'],'/', 'MainController@index')->name('admin.main.index');
            Route::get('/create', 'MainController@create')->name('admin.main.create');
            Route::post('/store', 'MainController@store')->name('admin.main.store');
            Route::get('/{id}/edit', 'MainController@edit')->name('admin.main.edit');
            Route::post('update', 'MainController@update')->name('admin.main.update');
            Route::delete('delete/{id}', 'MainController@delete')->name('admin.main.delete');
        });

        Route::group(['prefix' => 'introduction','namespace' => 'Introduction'],function(){
            Route::match(['GET','POST'],'/', 'IntroductionController@index')->name('admin.introduction.index');
            Route::get('/create', 'IntroductionController@create')->name('admin.introduction.create');
            Route::post('/store', 'IntroductionController@store')->name('admin.introduction.store');
            Route::post('/uploadMedia', 'IntroductionController@uploadVideo')->name('admin.introduction.uploadVideo');
            Route::get('/{id}/edit', 'IntroductionController@edit')->name('admin.introduction.edit');
            Route::post('update', 'IntroductionController@update')->name('admin.introduction.update');
            Route::delete('delete/{id}', 'IntroductionController@delete')->name('admin.introduction.delete');
        });

        Route::group(['prefix' => 'vision-and-mission','namespace' => 'VisionAndMission'],function(){
            Route::match(['GET','POST'],'/', 'VisionAndMissionController@index')->name('admin.vision_and_mission.index');
            Route::get('/create', 'VisionAndMissionController@create')->name('admin.vision_and_mission.create');
            Route::post('/store', 'VisionAndMissionController@store')->name('admin.vision_and_mission.store');
            Route::get('/{id}/edit', 'VisionAndMissionController@edit')->name('admin.vision_and_mission.edit');
            Route::post('update', 'VisionAndMissionController@update')->name('admin.vision_and_mission.update');
            Route::delete('delete/{id}', 'VisionAndMissionController@delete')->name('admin.vision_and_mission.delete');
        });

        Route::group(['prefix' => 'program-goal','namespace' => 'ProgramGoal'],function(){
            Route::match(['GET','POST'],'/', 'ProgramGoalController@index')->name('admin.program_goal.index');
            Route::get('/create', 'ProgramGoalController@create')->name('admin.program_goal.create');
            Route::post('/store', 'ProgramGoalController@store')->name('admin.program_goal.store');
            Route::get('/{id}/edit', 'ProgramGoalController@edit')->name('admin.program_goal.edit');
            Route::post('update', 'ProgramGoalController@update')->name('admin.program_goal.update');
            Route::delete('delete/{id}', 'ProgramGoalController@delete')->name('admin.program_goal.delete');
        });

        Route::group(['prefix' => 'condition-subscription','namespace' => 'ConditionSubscription'],function(){
            Route::match(['GET','POST'],'/', 'ConditionSubscriptionController@index')->name('admin.condition_subscription.index');
            Route::get('/create', 'ConditionSubscriptionController@create')->name('admin.condition_subscription.create');
            Route::post('/store', 'ConditionSubscriptionController@store')->name('admin.condition_subscription.store');
            Route::get('/{id}/edit', 'ConditionSubscriptionController@edit')->name('admin.condition_subscription.edit');
            Route::post('update', 'ConditionSubscriptionController@update')->name('admin.condition_subscription.update');
            Route::delete('delete/{id}', 'ConditionSubscriptionController@delete')->name('admin.condition_subscription.delete');
        });

        Route::group(['prefix' => 'media-center','namespace' => 'MediaCenter'],function(){
            Route::match(['GET','POST'],'/', 'MediaCenterController@index')->name('admin.media_center.index');
            Route::get('/create', 'MediaCenterController@create')->name('admin.media_center.create');
            Route::post('/store', 'MediaCenterController@store')->name('admin.media_center.store');
            Route::post('/uploadMedia', 'MediaCenterController@uploadVideo')->name('admin.media_center.uploadVideo');
            Route::get('/{id}/edit', 'MediaCenterController@edit')->name('admin.media_center.edit');
            Route::post('update', 'MediaCenterController@update')->name('admin.media_center.update');
            Route::delete('delete/{id}', 'MediaCenterController@delete')->name('admin.media_center.delete');
        });

        Route::group(['prefix' => 'contact-us-page','namespace' => 'ContactUsPage'],function(){
            Route::match(['GET','POST'],'/', 'ContactUsPageController@index')->name('admin.contact_us_page.index');
            Route::get('/create', 'ContactUsPageController@create')->name('admin.contact_us_page.create');
            Route::post('/store', 'ContactUsPageController@store')->name('admin.contact_us_page.store');
            Route::post('/uploadMedia', 'ContactUsPageController@uploadVideo')->name('admin.contact_us_page.uploadVideo');
            Route::get('/{id}/edit', 'ContactUsPageController@edit')->name('admin.contact_us_page.edit');
            Route::post('update', 'ContactUsPageController@update')->name('admin.contact_us_page.update');
            Route::delete('delete/{id}', 'ContactUsPageController@delete')->name('admin.contact_us_page.delete');
        });

        Route::group(['prefix' => 'contact-us-messages','namespace' => 'ContactUs'],function(){
            Route::match(['GET','POST'],'/', 'ContactUsController@index')->name('admin.contact_us.index');
            Route::get('/{id}/show', 'ContactUsController@getMessage')->name('admin.contact_messages.show');

        });


        Route::group(['prefix' => 'homescreen-ads'],function(){
            Route::match(['GET','POST'],'/', 'HomeSliderAds\HomeScreenSliderAdController@index')->name('promo-ads.homescreen.index');
            Route::get('/create', 'HomeSliderAds\HomeScreenSliderAdController@create')->name('promo-ads.homescreen.create');
            Route::post('/media/upload', 'HomeSliderAds\HomeScreenSliderAdController@uploadMedia')->name('promo-ads.homescreen.uploadMedia');
            Route::post('/store', 'HomeSliderAds\HomeScreenSliderAdController@store')->name('promo-ads.homescreen.store');
            Route::get('/{id}/edit', 'HomeSliderAds\HomeScreenSliderAdController@edit')->name('promo-ads.homescreen.edit');
            Route::post('update', 'HomeSliderAds\HomeScreenSliderAdController@update')->name('promo-ads.homescreen.update');
            Route::delete('delete/{id}', 'HomeSliderAds\HomeScreenSliderAdController@delete')->name('promo-ads.homescreen.delete');
        });


    });
});
