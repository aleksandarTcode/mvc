<?php
class test extends Controller
{
	public function index(){
		$this->viewbag["hello"]="world";
		$this->viewbag["cars"]=Car::GetAll();
		$this->show_view("index");
	}
}