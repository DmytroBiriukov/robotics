<?php

/**
 * All route names are prefixed with 'admin.robotics'.
 */

Route::group([
    'prefix'     => 'robotics',
    'as'         => 'robotics.',
    'namespace'  => 'Robotics',
], function () {

       // Route::group(['namespace' => 'projects'], function () {
           Route::resource('projects', 'ProjectsController', ['except' => [ 'update']]);
           Route::post('projects/{project}/update', 'ProjectsController@update')->name('projects.update');
    Route::post('projects/{project}', 'ProjectsController@show')->name('projects.show');
           /*Route::post('projects/get', 'ProjectsController')->name('projectss.get');*/
		//});

});