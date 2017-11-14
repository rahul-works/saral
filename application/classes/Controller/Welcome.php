<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {
    

	public function action_index()
	{
		echo ' welcome to saral'; die;
        
	}
    
    public function action_smstest(){
        // Account details
        $apiKey = urlencode('ITvS+URI3aw-boRpjOSIMoOnF8uc5BfY2LfXmZoxQF');

        // Message details
        $numbers = array(919481704975);
        $sender = urlencode('TXTLCL');
        $message = rawurlencode('This is your message- yeah kabira manena');

        $numbers = implode(',', $numbers);

        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Process your response here
        echo $response; die;
    }
    
    

} // End Welcome
