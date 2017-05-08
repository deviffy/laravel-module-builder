<?php
/**
 * Package routing file specifies all of this package routes.
 */

Route::get('module-builder', 
    'deviffy\modulebuilder\Controllers\ModuleBuilderController@index');