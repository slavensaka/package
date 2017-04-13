<?php
namespace slavensaka\mypackage;

class myPackage {
	/**
	 * SaySomething function
	 * @return type
	 */
	public static function saySomething(){
		// return config('mypackage.message');
		return trans('mypackage::messages.greeting');
	}
}