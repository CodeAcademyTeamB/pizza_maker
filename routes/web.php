<?php
/**
 *  Routes for admin group
 */
Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'cheese'], function () {

        Route::get('/', ['uses' => 'PMCheeseController@index']);

        Route::get('/create', ['uses' => 'PMCheeseController@create']);

        Route::post('/create', ['as' => 'store-cheese', 'uses' => 'PMCheeseController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMCheeseController@show']);

            Route::get('/edit', ['uses' => 'PMCheeseController@edit']);

            Route::post('/edit', ['as' => 'update-cheese', 'uses' => 'PMCheeseController@update']);

            Route::delete('/', ['as' => 'delete-cheese', 'uses' => 'PMCheeseController@destroy']);

        });
    });

    Route::group(['prefix' => 'ingridients'], function () {

        Route::get('/', ['uses' => 'PMIngridientsController@index']);

        Route::get('/create', ['uses' => 'PMIngridientsController@create']);

        Route::post('/create', ['as' => 'store-ingridients', 'uses' => 'PMIngridientsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMIngridientsController@show']);

            Route::get('/edit', ['uses' => 'PMIngridientsController@edit']);

            Route::post('/edit', ['as' => 'update-ingridients', 'uses' => 'PMIngridientsController@update']);

            Route::delete('/', ['as' => 'delete-ingridient', 'uses' => 'PMIngridientsController@destroy']);

        });
    });

    Route::group(['prefix' => 'pad'], function () {

        Route::get('/', ['uses' => 'PMPadController@index']);

        Route::get('/create', ['uses' => 'PMPadController@create']);

        Route::post('/create', ['as' => 'store-pad', 'uses' => 'PMPadController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMPadController@show']);

            Route::get('/edit', ['uses' => 'PMPadController@edit']);

            Route::post('/edit', ['as' => 'update-pad', 'uses' => 'PMPadController@update']);

            Route::delete('/', ['as' => 'delete-pad', 'uses' => 'PMPadController@destroy']);

        });
    });

    Route::group(['prefix' => 'permissions'], function () {

        Route::get('/', ['uses' => 'PMPermissionsController@index']);

        Route::get('/create', ['uses' => 'PMPermissionsController@create']);

        Route::post('/create', ['as' => 'store-permissions', 'uses' => 'PMPermissionsController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMPermissionsController@show']);

            Route::get('/edit', ['uses' => 'PMPermissionsController@edit']);

            Route::post('/edit', ['as' => 'update-permissions', 'uses' => 'PMPermissionsController@update']);

            Route::delete('/', ['as' => 'delete-permissions', 'uses' => 'PMPermissionsController@destroy']);

        });
    });

    Route::group(['prefix' => 'pizza'], function () {

        Route::get('/', ['uses' => 'PMPizzaOrderController@index']);

        Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);

        Route::post('/create', ['as' => 'store-pizza', 'uses' => 'PMPizzaOrderController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMPizzaOrderController@show']);

            Route::get('/edit', ['uses' => 'PMPizzaOrderController@edit']);

            Route::post('/edit', ['as' => 'update-pizza', 'uses' => 'PMPizzaOrderController@update']);

            Route::delete('/', ['as' => 'delete-pizza', 'uses' => 'PMPizzaOrderController@destroy']);

        });
    });

    Route::group(['prefix' => 'role'], function () {

        Route::get('/', ['uses' => 'PMRolesController@index']);

        Route::get('/create', ['uses' => 'PMRolesController@create']);

        Route::post('/create', ['as' => 'store-role', 'uses' => 'PMRolesController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMRolesController@show']);

            Route::get('/edit', ['uses' => 'PMRolesController@edit']);

            Route::post('/edit', ['as' => 'update-role', 'uses' => 'PMRolesController@update']);

            Route::delete('/', ['as' => 'delete-role', 'uses' => 'PMRolesController@destroy']);

        });
    });

    Route::group(['prefix' => 'user'], function () {

        Route::get('/', ['uses' => 'PMUsersController@index']);

        Route::get('/create', ['uses' => 'PMUsersController@create']);

        Route::post('/create', ['as' => 'store-user', 'uses' => 'PMUsersController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMUsersController@show']);

            Route::get('/edit', ['uses' => 'PMUsersController@edit']);

            Route::post('/edit', ['as' => 'update-user', 'uses' => 'PMUsersController@update']);

            Route::delete('/', ['as' => 'delete-user', 'uses' => 'PMUsersController@destroy']);

        });
    });

});

/**
 * Routes for User group
 */

Route::group(['prefix' => 'user'], function () {

    Route::group(['prefix' => 'cheese'], function () {

        Route::get('/', ['uses' => 'PMCheeseController@index']);

    });

    Route::group(['prefix' => 'ingridients'], function () {

        Route::get('/', ['uses' => 'PMIngridientsController@index']);

    });

    Route::group(['prefix' => 'pad'], function () {

        Route::get('/', ['uses' => 'PMPadController@index']);

    });

    Route::group(['prefix' => 'pizza'], function () {

        Route::get('/', ['uses' => 'PMPizzaOrderController@index']);

        Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);

        Route::post('/create', ['as' => 'store-pizza', 'uses' => 'PMPizzaOrderController@store']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', ['uses' => 'PMPizzaOrderController@show']);

        });
    });

});