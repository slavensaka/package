<?php
namespace slavensaka\mypackage\Facade;

use Illuminate\Support\Facades\Facade;

class mypackage extends Facade {
	protected static function getFacadeAccessor(){
		return 'mypackage';
	}
}