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

Route::get('/', function () {
    return view('/coming-soon-page');
});
//components
Route::get('/components-badges', 'ComponentController@returnComponent');
//taskboard
Route::get('/taskboard', 'TaskBoardController@index');
// chat
Route::get('/chat', 'ChatController@index');
// dashboard
Route::get('/dashboard-1', 'DashboardController@index_1');
Route::get('/dashboard-2', 'DashboardController@index_2');
//color-palette
Route::get('/color-palette', 'ColorPaletteController@index');
//calendar
Route::get('/calendar', 'CalendarController@index');

//UI Kits
Route::get('/grids', 'UIKitController@grids');
Route::get('/typography', 'UIKitController@typography');
Route::get('/syntax-highlighter', 'UIKitController@syntaxHighlighter');
Route::get('/helper-classes', 'UIKitController@helperClasses');
Route::get('/text-utilities', 'UIKitController@textUtilities');
//icons
Route::get('/feather', 'IconController@feather');
Route::get('/font-awesome', 'IconController@fontAwesome');
Route::get('/simple-line', 'IconController@simpleLine');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
