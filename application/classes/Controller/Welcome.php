<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
    

	public function action_index()
	{
		$this->response->body(View::factory('test/tent')
                                        ->set('header', View::factory('test/header'))
                                        ->set('nav_header', View::factory('test/nav_header')
                                                                ->set('type', "1"))
                                        ->set('footer', View::factory('test/footer')));
        
	}
    
    public function action_test(){
        echo 'i m here '; die;
    }
    
    

} // End Welcome
