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
    return view('welcome');
});

Route::group(['prefix' => 'service'], function () {
    Route::get('/', [
        'uses' => 'PMPizzaOrderController@index'
    ]);
    Route::get('/create/', [
        'uses' => 'PMPizzaOrderController@create'
    ]);

    Route::post('/create/', [
        'as' => 'app.create.service',
        'uses' => 'PMPizzaOrderController@store'
    ]);
    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', [
            'uses' => 'PMPizzaOrderController@show'
        ]);
        Route::get('/edit', [
            'uses' => 'PMPizzaOrderController@edit'
        ]);
        Route::post('/edit', [
            'as' => 'app.update.service',
            'uses' => 'PMPizzaOrderController@update'
        ]);
        Route::delete('/delete', [
            'as' => 'delete.service',
            'uses' => 'PMPizzaOrderController@destroy'
        ]);
    });
});


Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'pizza'], function () {
        Route::get('/', [
            'uses' => 'PMPizzaOrderController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMPizzaOrderController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.pizza',
            'uses' => 'PMPizzaOrderController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMPizzaOrderController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMPizzaOrderController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.pizza',
                'uses' => 'PMPizzaOrderController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.pizza',
                'uses' => 'PMPizzaOrderController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'cheese'], function () {
        Route::get('/', [
            'uses' => 'PMCheeseController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMCheeseController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.cheese',
            'uses' => 'PMCheeseController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMCheeseController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMCheeseController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.cheese',
                'uses' => 'PMCheeseController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.cheese',
                'uses' => 'PMCheeseController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'pad'], function () {
        Route::get('/', [
            'uses' => 'PMPadController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMPadController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.pad',
            'uses' => 'PMPadController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMPadController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMPadController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.pad',
                'uses' => 'PMPadController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.pad',
                'uses' => 'PMPadController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'ingridients'], function () {
        Route::get('/', [
            'uses' => 'PMIngridientsController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMIngridientsController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.ingridients',
            'uses' => 'PMIngridientsController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMIngridientsController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMIngridientsController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.ingridients',
                'uses' => 'PMIngridientsController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.ingridients',
                'uses' => 'PMIngridientsController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', [
            'uses' => 'PMRolesController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMRolesController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.roles',
            'uses' => 'PMRolesController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMRolesController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMRolesController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.roles',
                'uses' => 'PMRolesController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.roles',
                'uses' => 'PMRolesController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'permisions'], function () {
        Route::get('/', [
            'uses' => 'PMPermisionsController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMPermisionsController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.permisions',
            'uses' => 'PMPermisionsController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMPermisionsController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMPermisionsController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.permisions',
                'uses' => 'PMPermisionsController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.permisions',
                'uses' => 'PMPermisionsController@destroy'
            ]);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [
            'uses' => 'PMUsersController@index'
        ]);
        Route::get('/create/', [
            'uses' => 'PMUsersController@create'
        ]);

        Route::post('/create/', [
            'as' => 'app.create.users',
            'uses' => 'PMUsersController@store'
        ]);
        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [
                'uses' => 'PMUsersController@show'
            ]);
            Route::get('/edit', [
                'uses' => 'PMUsersController@edit'
            ]);
            Route::post('/edit', [
                'as' => 'app.update.users',
                'uses' => 'PMUsersController@update'
            ]);
            Route::delete('/delete', [
                'as' => 'delete.users',
                'uses' => 'PMUsersController@destroy'
            ]);
        });
    });
});