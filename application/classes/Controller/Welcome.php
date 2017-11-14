<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
    

	public function action_index()
	{
		echo ' welcome to saral'; die;
        
	}
    
    public function action_smstest(){
        // Process your response here
        $response='{"balance":8,"batch_id":322728380,"cost":1,"num_messages":1,"message":{"num_parts":1,"sender":"TXTLCL","content":"This is your message- yeah kabira manena"},"receipt_url":"","custom":"","messages":[{"id":"1247649252","recipient":919481704975}],"status":"success"}'; 
        
        $json_o = json_decode($response);
        
        echo $json_o->batch_id; 
        echo $json_o->status; 
        echo $json_o->messages[0]->id; 
        echo $json_o->balance; 
        var_dump($json_o);
        die;
    }
    
    

} // End Welcome
