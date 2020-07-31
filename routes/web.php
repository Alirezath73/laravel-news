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
//client
Auth::routes();

Route::get('/profile/{user:email}/edit', 'front\UserController@edit')->name('profile.show')->middleware('auth');
Route::post('/profile/{user:email}', 'front\UserController@update')->name('profile.update');

Route::get('/', 'front\HomeController@index')->name('index');

Route::get('/post/{post:slug}', 'front\HomeController@showPost')->name('show.post');

Route::post('/', 'front\HomeController@storeComment')->name('store.comment');

Route::get('/posts/{category:name}', 'front\HomeController@categoryPosts')->name('category.posts');

Route::get('/search', 'front\HomeController@search')->name('post.search');


//admin
Route::prefix('dashboard')->group(function () {

    Route::middleware('adminAuth')->group(function () {

        Route::get('', function () {
            return view('back.index');
        })->name('dashboard');

        Route::resource('/admin', 'back\AdminController')->except('show');

        Route::resource('/user', 'back\UserController')->only(['index', 'destroy']);

        Route::resource('/author', 'back\AuthorController')->except('show', 'edit');
        Route::get('/author/{author:last_name}/edit', 'back\AuthorController@edit')->name('author.edit');

        Route::resource('/category', 'back\CategoryController')->except('show');

        Route::resource('/post', 'back\PostController')->except('show', 'edit');
        Route::get('/post/{post:slug}/edit', 'back\PostController@edit')->name('post.edit');

        Route::post('/deleteImage', 'back\PostController@deleteImage')->name('dashboard.delete.image');

        Route::resource('/comment', 'back\CommentController')->only('index', 'destroy');
    });

    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('dashboard.login.get');
    Route::post('login', 'AdminAuth\LoginController@login')->name('dashboard.login.post');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('dashboard.logout');

    /*Route::get('register', 'AdminAuth\RegisterController@showRegistrationForm')->name('dashboard.register.get');
    Route::post('register', 'AdminAuth\RegisterController@register')->name('dashboard.register.post');
    Route::get('password/confirm', 'AdminAuth\ConfirmPasswordController@showConfirmForm')->name('dashboard.password.confirm.get');
    Route::post('password/confirm', 'AdminAuth\ConfirmPasswordController@confirm')->name('dashboard.password.confirm.post');
    Route::get('password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
    Route::post('password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
    Route::get('password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm')->name('dashboard.password.reset.get');
    Route::post('password/reset', 'AdminAuth\ResetPasswordController@reset')->name('dashboard.password.reset.post');*/
});
