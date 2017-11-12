<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller {
    
    public function action_index(){
        $this->response->body(View::factory('login/login_form')
                                        ->set('header', View::factory('login/header'))
                                        ->set('footer', View::factory('login/footer')));
    }
    
    public function action_loggedin(){
        $login_m    =	new Model_Login;
        $details = $login_m->check_login();
        if($details){
            // set session variable if clicked on checked for long time 24 hours else 10 mins.
            session_start();
            $_SESSION["adhikari"]   = $details["name"];
            $_SESSION["unit"]       = $details["unit"];
            
            $this->redirect(SITEURL.'/delhi/tent_form');
            
        } else {
            $this->response->body(View::factory('login/login_form')
                                        ->set('invalid', 'username and password is invalid please try again..')
                                        ->set('header', View::factory('login/header'))
                                        ->set('footer', View::factory('login/footer')));
        }
    }
    
    public function action_out(){
        session_start();
        // remove all session variables
        session_unset(); 
        // destroy the session 
        session_destroy(); 
        $this->response->body(View::factory('login/login_form')
                                        ->set('header', View::factory('login/header'))
                                        ->set('footer', View::factory('login/footer')));
    }
    
}