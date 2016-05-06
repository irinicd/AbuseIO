<?php

Route::group(
    [
        'prefix' => 'users',
        'as'     => 'users.',
    ],
    function () {
        // Access to index list
        route::get(
            '',
            [
                'as'         => 'index',
                'uses'       => 'UsersController@apiIndex',
            ]
        );

        // Access to show object
        route::get(
            '{users}',
            [
                'as'         => 'show',
                'uses'       => 'UsersController@apiShow',
            ]
        );
    }
);
