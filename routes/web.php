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

//switch language
Route::get('/locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});
Route::prefix('/')->group(function () {
    // home router
    Route::get('', 'HomeController@index');

    // project router
    Route::get('project', 'ProjectController@index');

    // service router
    Route::get('service', 'ServiceController@index');
    // service router
    Route::get('solution', 'SolutionController@index');

    // about router
    Route::get('about', 'AboutController@index');

    // contact router
    Route::get('contact', 'ContactController@index');

    // Route used to send mail 
    Route::get('email', 'MailController@index');
    Route::post('email', 'MailController@sendmail');
    //switch language
    Route::get('/locale/{locale}', function($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    });

    // project detail 
    Route::get('/project-detail/{id}', 'ProjectController@show');

    // service detail 
    Route::get('/solution-detail/{id}', 'SolutionController@show');
    Route::get('/home-detail/{id}', 'HomeController@show');
    // back
    
});

