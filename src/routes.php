<?php
/**
 * Package routing file specifies all of this package routes.
 */

Route::get('module-builder', 
    'deviffy\laravel-module-builder\Controllers\ModuleBuilderController@index');