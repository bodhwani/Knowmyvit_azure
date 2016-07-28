<?php



Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::group(['middeware' => ['web']],function()
{

Route::post('/login', [
    'uses' => 'UserController@Login',
    'as' => 'login',
    //'middleware' => 'auth'
]);

Route::get('/logged_in', [
    'uses' => 'UserController@Logged_in',
    'as' => 'logged_in',

]);

Route::post('/signin', [
    'uses' => 'UserController@Sign_in',
    'as' => 'signin',
    'middleware' => 'auth'
]);



Route::get('/about', [
    'uses' => 'UserController@About',
    'as' => 'about',
]);
//Route::get('/review', [
//    'uses' => 'UserController@Review',
//    'as' => 'review',
//]);
Route::get('/joinus', [
    'uses' => 'UserController@Joinus',
    'as' => 'joinus',
]);
Route::get('/contact', [
    'uses' => 'UserController@Contact',
    'as' => 'contact',
]);

Route::get('/review', [
    'uses' => 'MoviesController@Show_movies',
    'as' => 'review',
]);

Route::post('/executeSearch', [
    'uses'=>'MoviesController@executeSearch',
    'as' => 'executeSearch'
    ]);

});











