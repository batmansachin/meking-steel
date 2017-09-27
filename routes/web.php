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

Route::get('/','SiteController@index')->name('index');
Route::get('contact-us','SiteController@contact')->name('contact');
Route::post('submit-query','SiteController@submitquery')->name('submit-query');
Route::get('services','SiteController@services')->name('services');
Route::get('space-frame-structure','SiteController@sfs')->name('sfs');
Route::get('about-us','SiteController@aboutUs')->name('about');
Route::get('building-components','SiteController@buildingComponent')->name('building-component');
Route::get('structure-steel-buildings','SiteController@structuresteelbuildings')->name('structure-steel-buildings');
Route::get('turnkey-construction-solutions','SiteController@turnkeyconstructionsolutions')->name('turnkey-construction-solutions');
route::get('product-literature','SiteController@productliterature')->name('product-literature');
route::get('product-R&D','SiteController@productRD')->name('product-R&D'); 
route::get('quality-assurance','SiteController@qualityassurance')->name('quality-assurance');

route::get('PEB-basic-terms','SiteController@PEBBasicTerms')->name('PEB-basic-terms');

route::get('careers','SiteController@careers')->name('careers');