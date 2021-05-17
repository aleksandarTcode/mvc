<?php
function __autoload($classname){
	include "model/".$classname.".php";
}
class Controller
{
	public $viewbag = array();
	public $view;

	public function show_view($v=null){
		include "view/" . (($v==null)?$this->view:$v) . ".php";
	}
}
$controller = $_GET['c'];
$method = $_GET['m'];
include "controller/" . $controller . ".php";
$c = new $controller;
$c->$method();