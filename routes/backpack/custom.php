<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::get('home',[
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
    'uses' => 'App\Http\Controllers\Admin\HomeController@dashboard'
])->name('home');;

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('extract_metadata_status', 'Extract_metadata_statusCrudController');
    Route::crud('Transactions', 'TransactionsCrudController');
    Route::crud('transactions', 'TransactionsCrudController');
    Route::crud('Category', 'CategoryCrudController');
    Route::crud('category', 'CategoryCrudController');
    Route::crud('subCategory', 'SubCategoryCrudController');
    Route::crud('subcategory', 'SubCategoryCrudController');
    Route::crud('Pattern', 'PatternCrudController');
    Route::crud('pattern', 'PatternCrudController');

}); // this should be the absolute last line of this file

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
