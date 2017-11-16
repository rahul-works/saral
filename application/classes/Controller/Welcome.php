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
    
    public function action_testbulksms(){
        //Your authentication key
        $authKey = "f178866626475cebe22cb01c1873a77d";
        //Multiple mobiles numbers separated by comma
        $mobileNumber = "7259378545";
        //Sender ID, While using route4 sender id should be 6 characters long.
        $senderId = "102234";
        //Your message to send, Add URL encoding here.
        $message = urlencode("Test message its wokring 123-12");
        //Define route 
        $route = "B";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );
        //API URL
        $url = "http://sms.bulksmsserviceproviders.com/api/send_http.php";
        // init the resource
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));
        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        //get response
        $output = curl_exec($ch);
        //Print error if any
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        echo $output;
        die;
    }
    
    

} // End Welcome
