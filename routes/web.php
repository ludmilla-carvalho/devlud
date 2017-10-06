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


Route::get('/', 'Site\SiteController@index')->name('site.index');

Route::get('portfolio', 'Site\SiteController@portfolio')->name('site.portfolio');
Route::get('portfolio/{slug}', 'Site\SiteController@showPortfolio')->name('site.show-portfolio');

Route::get('habilidades', 'Site\SiteController@skills')->name('site.skills');

Route::get('sobre', 'Site\SiteController@about')->name('site.about');

Route::get('contato', 'Site\SiteController@contact')->name('site.contact');
Route::post('mensagem', 'Site\SiteController@message')->name('site.message');

//Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('admin')->group(function () {
    // Authentication Routes...
    Route::get('login', ['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => '','uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout','uses' => 'Auth\LoginController@logout']);
  
    // Password Reset Routes...
    Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('password/reset', ['as' => 'password.request','uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('password/reset', ['as' => '','uses' => 'Auth\ResetPasswordController@reset']);
    Route::get('password/reset/{token}', ['as' => 'password.reset','uses' => 'Auth\ResetPasswordController@showResetForm']);
  
    // Registration Routes...
    //Route::get('register', ['as' => 'register','uses' => 'Auth\RegisterController@showRegistrationForm']);
    //Route::post('register', ['as' => '','uses' => 'Auth\RegisterController@register']);

    Route::get('/', 'Admin\DashboardController@index')->name('home-admin');
    Route::get('dashboard', 'Admin\DashboardController@index')->name('home-admin');

    Route::resource('users', 'Admin\UsersController', ['except' => ['show']]);
    
    Route::resource('portfolio', 'Admin\PortfolioController', ['except' => ['show']]);
    Route::post('portfolio/order', 'Admin\PortfolioController@order')->name('portfolios.order');
    Route::get('portfolio/images/delete/{id}/{p_id}', 'Admin\PortfolioController@deleteImage')->name('portifolio.delete.image');
    
    Route::resource('skills', 'Admin\SkillsController', ['except' => ['show']]);
    Route::post('skills/order', 'Admin\SkillsController@order')->name('skills.order');

    Route::resource('certificates', 'Admin\CertificatesController', ['except' => ['show']]);

    Route::get('messages', 'Admin\MessagesController@index')->name('messages.index');




    /*
    Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
    ]);

    Route::resource('monkeys', 'MonkeysController', [
        'except' => ['edit', 'create']
    ]);
    */
});
