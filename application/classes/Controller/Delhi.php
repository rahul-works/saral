<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Delhi extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world! test');
	}
    
    private function check_login(){
        if(!isset($_SESSION)) { 
            session_start(); 
        }
        if(isset($_SESSION) && isset($_SESSION['adhikari'])){
            return true;
        } else {
            $this->response->body(View::factory('login/login_form')
                                        ->set('invalid', 'invalid access, please try again')
                                        ->set('header', View::factory('login/header'))
                                        ->set('footer', View::factory('login/footer')));   
        }
    }
    
     public function action_tent_form(){
        if($this->check_login()){
            $this->response->body(View::factory('test/tent')
                                        ->set('header', View::factory('test/header'))
                                        ->set('nav_header', View::factory('test/nav_header')
                                                                ->set('type', "1"))
                                        ->set('footer', View::factory('test/footer')));    
        } 
    }
    
    public function action_gatepass($details){
        if($this->check_login()){
            // we will give tent# + sr# in the id. 
            $text_m    =	new Model_Test;
            $this->response->body(View::factory('test/gatepassdetails')
                                            ->set('details', $details)
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "4"))
                                            ->set('footer', View::factory('test/footer')));
        }
    }
    
    public function action_check_tent(){
        if($this->check_login()){
            $this->response->body(View::factory('test/checktent')
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "2"))
                                            ->set('footer', View::factory('test/footer')));
        }
    }
    
    public function action_save_tent_form(){
        if($this->check_login()){
            $text_m    = new Model_Test;
            $id        = $text_m->save_tent();
            $details = $text_m->check_tent($id);
            if(isset($details[0])){
                $details[0]['gnumber'] = $details[0]['id'];
                $this->response->body(View::factory('test/gatepassdetails')
                                            ->set('details', $details[0])
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "4"))
                                            ->set('footer', View::factory('test/footer')));
            } else {
                $this->response->body(View::factory('test/gatepassdetails')
                                            ->set('details', $details[0])
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "6"))
                                            ->set('footer', View::factory('test/footer')));
            }
        }
    }
    
    public function action_tent_entry_result(){
        if($this->check_login()){
            $text_m    =	new Model_Test;
            $id = $_POST['passno'];
            $details = $text_m->check_tent($id);
            if(isset($details[0])){
                $details[0]['gnumber'] = $details[0]['id'];
                $this->response->body(View::factory('test/gatepassdetails')
                                            ->set('details', $details[0])
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "4"))
                                            ->set('footer', View::factory('test/footer')));
            } else {
                $this->response->body(View::factory('test/gatepassdetails')
                                            ->set('details', $details[0])
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "5"))
                                            ->set('footer', View::factory('test/footer')));
            }
        }
        
    }
    
    public function action_contact(){
        if($this->check_login()){
            $this->response->body(View::factory('test/contact')
                                            ->set('header', View::factory('test/header'))
                                            ->set('nav_header', View::factory('test/nav_header')
                                                                    ->set('type', "3"))
                                            ->set('footer', View::factory('test/footer')));
        }
    }
}
