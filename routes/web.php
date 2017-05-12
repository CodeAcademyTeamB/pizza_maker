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


Route::group(['prefix' => 'pizza'], function () {
    Route::get('/', ['as' => 'app.pizzaOrders.index', 'uses' => 'PMPizzaOrderController@index']);
    Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
    Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);
    Route::get('/{id}', ['uses' => 'PMPizzaOrderController@show']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'pizzaOrders'], function () {
        Route::get('/', ['as' => 'app.pizzaOrders.adminIndex', 'uses' => 'PMPizzaOrderController@adminIndex']);
        Route::get('/create', ['uses' => 'PMPizzaOrderController@adminCreate']);
        Route::post('/create', ['as' => 'app.pizzaOrders.adminCreate', 'uses' => 'PMPizzaOrderController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPizzaOrderController@adminShow']);
            Route::get('/edit', ['as' => 'app.pizzaOrders.adminEdit', 'uses' => 'PMPizzaOrderController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPizzaOrderController@adminUpdate']);
            Route::delete('/', ['as' => 'app.pizzaOrders.adminDelete', 'uses' => 'PMPizzaOrderController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'cheese'], function () {
        Route::get('/', ['as' => 'app.cheese.adminIndex', 'uses' => 'PMCheeseController@adminIndex']);
        Route::get('/create', ['uses' => 'PMCheeseController@adminCreate']);
        Route::post('/create', ['as' => 'app.cheese.adminCreate', 'uses' => 'PMCheeseController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMCheeseController@adminShow']);
            Route::get('/edit', ['as' => 'app.cheese.adminEdit', 'uses' => 'PMCheeseController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMCheeseController@adminUpdate']);
            Route::delete('/', ['as' => 'app.cheese.adminDelete', 'uses' => 'PMCheeseController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'ingredients'], function () {
        Route::get('/', ['as' => 'app.ingredients.adminIndex', 'uses' => 'PMIngredientsController@adminIndex']);
        Route::get('/create', ['uses' => 'PMIngredientsController@adminCreate']);
        Route::post('/create', ['as' => 'app.ingredients.adminCreate', 'uses' => 'PMIngredientsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMIngredientsController@adminShow']);
            Route::delete('/', ['as' => 'app.ingredients.adminDelete', 'uses' => 'PMIngredientsController@adminDestroy']);

            Route::get('/edit', ['as' => 'app.ingredients.adminEdit', 'uses' => 'PMIngredientsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMIngredientsController@adminUpdate']);
        });
    });
    Route::group(['prefix' => 'pad'], function () {
        Route::get('/', ['as' => 'app.pad.adminIndex', 'uses' => 'PMPadController@adminIndex']);
        Route::get('/create', ['as' => 'app.pad.adminCreate', 'uses' => 'PMPadController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPadController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPadController@adminShow']);
            Route::get('/edit', ['as' => 'app.pad.adminEdit', 'uses' => 'PMPadController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPadController@adminUpdate']);
            Route::delete('/', ['as' => 'app.pad.adminDelete', 'uses' => 'PMPadController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'app.permissions.adminIndex', 'uses' => 'PMPermissionsController@adminIndex']);
        Route::get('/create', ['as' => 'app.permissions.adminCreate', 'uses' => 'PMPermissionsController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPermissionsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPermissionsController@adminShow']);
            Route::get('/edit', ['as' => 'app.permissions.adminEdit', 'uses' => 'PMPermissionsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPermissionsController@adminUpdate']);
            Route::delete('/', ['as' => 'app.permissions.adminDelete', 'uses' => 'PMPermissionsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'app.roles.adminIndex', 'uses' => 'PMRolesController@adminIndex']);
        Route::get('/create', ['as' => 'app.roles.adminCreate', 'uses' => 'PMRolesController@adminCreate']);
        Route::post('/create', ['uses' => 'PMRolesController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMRolesController@adminShow']);
            Route::get('/edit', ['as' => 'app.roles.adminEdit', 'uses' => 'PMRolesController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMRolesController@adminUpdate']);
            Route::delete('/', ['as' => 'app.roles.adminDelete', 'uses' => 'PMRolesController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.user.adminIndex', 'uses' => 'PMUsersController@adminIndex']);
        Route::get('/create', ['as' => 'app.user.adminCreate', 'uses' => 'PMUsersController@adminCreate']);
        Route::post('/create', ['uses' => 'PMUsersController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMUsersController@adminShow']);
            Route::get('/edit', ['as' => 'app.user.adminEdit', 'uses' => 'PMUsersController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMUsersController@adminUpdate']);
            Route::delete('/', ['as' => 'app.user.adminDelete', 'uses' => 'PMUsersController@adminDestroy']);
        });
    });
});


