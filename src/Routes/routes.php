<?php

Route::group(['namespace' => 'slavensaka\mypackage\Controllers'], function(){
	Route::get('say', 'mypackageController@say');
});