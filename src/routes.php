<?php
/**
 * Package routing file specifies all of this package routes.
 */

Route::get('module-builder', 
    'Deviffy\ModuleBuilder\Controllers\ModuleBuilderController@index');