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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ],
        'namespace' => 'Web'
    ],
    function()
    {
        Route::group(['prefix' =>'admin', 'middleware' => ['web', 'auth','isAdmin']], function () {
            Route::prefix('domains')->group(function () {
                Route::group([], function () {
                    Route::group(['middleware' => ['hasPermission:index-domains']], function() {
                        Route::match(['GET', 'POST'], 'index', 'DomainController@index')->name('domains.index');
                    });
                    Route::group(['middleware' => ['hasPermission:create-domains']], function() {
                        Route::match(['GET', 'POST'],'store', 'DomainController@store')->name('domains.store');
                        Route::get('create', 'DomainController@create')->name('domains.create');
                    });
                    Route::group(['middleware' => ['hasPermission:update-domains']], function() {
                        Route::post('update', 'DomainController@update')->name('domains.update');
                    });
                    Route::group(['middleware' => ['hasPermission:delete-domains']], function() {
                        Route::post('delete', 'DomainController@delete')->name('domains.delete');
                    });
                    Route::group(['perfix' => 'modals'], function() {
                        Route::group(['middleware' => ['hasPermission:create-domains']], function() {
                            Route::get('createdomainsModal', 'DomainController@createdomainsModal')->name('domains.modals.create');
                        });
                        Route::group(['middleware' => ['hasPermission:update-domains']], function() {
                            Route::get('UpdatedomainsModal/{id?}', 'DomainController@UpdatedomainsModal')->name('domains.modals.update');
                        });
                    });
                    Route::group(['prefix' => 'apply'], function() {
                        Route::get('application', 'DomainController@application')->name('domains.application');
                    });
                });
            });
        });
        Route::group(['prefix' =>'admin', 'middleware' => ['web']], function () {
            Route::prefix('domains')->group(function () {
                Route::group([], function () {
                    Route::group(['prefix' => 'apply'], function() {
                        Route::post('/', 'DomainController@apply')->name('domains.apply');
                    });
                });
            });
        });
    });