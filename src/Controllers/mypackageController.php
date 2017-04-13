<?php
namespace slavensaka\mypackage\Controllers;

use slavensaka\mypackage\mypackage;
use App\Http\Controllers\Controller;

class mypackageController extends Controller {
	public function say(){
		$say =  mypackage::saySomething();
		return view('mypackage::welcome', compact('say'));
	}
}