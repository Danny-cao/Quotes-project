<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


    Route::get('/{author?}', [
        'uses' => 'QuoteController@getIndex',
        'as' => 'index'
    ]);
    
    Route::post('/new', [
        'uses' => 'QuoteController@postQuote',
        'as' => 'create'
        ]);
        
        
    Route::get('/delete/{quote_id}', [
        'uses' => 'QuoteController@getDeleteQuote',
        'as' => 'delete'
        ]);    
        
        
    Route::get('/gotemail/{author_name}', [
        
        'uses' => 'QuoteController@getMailCallback',
        'as' => 'mail_callback'
        ]);    
        
        
    Route::get('/admin/login', [
            'uses' => 'AdminController@getLogin',
            'as' => 'admin.login'
        ]);    
        
        
        

    
    Route::get('/agenda', function() {
        return view ('layouts.agenda.agenda');
    })->name('reserveren');
    
    Route::group(['prefix' => 'reservering'], function() {
       
        Route::get('/', function () {
            return view('layouts.reserveren.reservering');
        })->name('reservering'); 
        
    });
    
    
        Route::group(['prefix' => 'aanmelding'], function() {
       
        Route::get('/', function () {
            return view('layouts.aanmelden.aanmelding');
        })->name('aanmelding'); 
        
    });
    
        Route::group(['prefix' => 'organisator'], function() {
       
        Route::get('/', function () {
            return view('layouts.organisator.organisator');
        })->name('organisator'); 
        
    });
    
    
        Route::get('/contact', function () {
        return view('layouts.contact');
        })->name('contact'); 

    


