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

// -------- Error Pages ------------------ useless but they're there to test
Route::get('/error404','View\HomeViewController@getNotFoundPage')->name('error404');
Route::get('/error403','View\HomeViewController@getRightErrorPage')->name('error403');
Route::get('/error401','View\HomeViewController@getUnauthorizedPage')->name('error401');
Route::get('/error419','View\HomeViewController@getAuthenticationTimoutPage')->name('error419');
Route::get('/error429','View\HomeViewController@getTooManyRequestPage')->name('error429');
Route::get('/error500','View\HomeViewController@getInternalErrorPage')->name('error500');
Route::get('/error503','View\HomeViewController@getServiceUnavailablePage')->name('error503');
// --------- End Error Pages ------------------

Route::group(['middleware' => 'setLocale'], function() { //Lang changed by Middleware
    Auth::routes(); //Getting auth routes
// Password reset link request routes...
    Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password/email');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Password reset routes...
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password/request');
    Route::post('password/reset', 'Auth\ResetPasswordController@postReset')->name('password/reset');
});

//home & menu
Route::get('/home', 'View\\HomeViewController@home')->middleware('auth')->name('home');
Route::get('/', 'View\\HomeViewController@welcome')->name('welcome');

Route::group(['middleware' => 'auth'], function() { // menu links
    Route::get('profile','View\\ProfileViewController@index')->name('profile');

    Route::get('calendar/view','View\\CalendarViewController@viewCalendar')->name('myCalendar');
    Route::get('calendar/create','View\\CalendarViewController@createCalendar')->name('createCalendar');
    Route::get('calendar/period/view','View\\CalendarViewController@viewPeriod')->name('myPeriod');
    Route::get('calendar/period/create','View\\CalendarViewController@createPeriod')->name('createPeriod');

    Route::get('task/view','View\\TaskViewController@view')->name('view');
    Route::get('task/create','View\\TaskViewController@create')->name('create');

    Route::get('team/view','View\\TeamViewController@view')->name('view');
    Route::get('team/join','View\\TeamViewController@join')->name('join');
    Route::get('team/create','View\\TeamViewController@create')->name('create');

    Route::get('structure/view','View\\StructureViewController@view')->name('view');
    Route::get('structure/join','View\\StructureViewController@join')->name('join');
    Route::get('structure/create','View\\StructureViewController@create')->name('create');

    Route::get('friend/view','View\\FriendViewController@view')->name('view');
    Route::get('friend/add','View\\FriendViewController@add')->name('add');
    Route::get('friend/message','View\\FriendViewController@message')->name('messages');

    Route::get('settings','View\\SettingsViewController@index')->name('settings');

    Route::get('notification/seeAll','View\\NotificationViewController@index')->name('see');
    Route::get('notification/config','View\\NotificationViewController@config')->name('configNotif');
});

//Change Language
Route::get('/setLang/{lang}', function ($lang) {
    $supportedLang = array('en','fr','it','es','de');
    if(in_array($lang,$supportedLang))
    {
        session(["lang" => $lang]);
    }
    else
    {
        session(["lang" => 'en']);
    }
    return back();
})->middleware('setLocale');

//Updating Divs
Route::get('/div/updateNotifs', 'View\\HomeViewController@addNotification')->name('updateNotifs');
Route::get('/div/getUnseenNotifs', "View\\HomeViewController@getUnseenNotification")->name('getUnseenNotification');
