<?php

class Authors_Controller extends Base_Controller{
	publix $restful= true;
	public function get_index(){
		return View::make('authors.index');
	}
}