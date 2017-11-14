<?php defined('SYSPATH') or die('No direct script access.');
ini_set('max_execution_time', 3000);

/**
 * 	@File		:	test.php Model
 * 	@Class		:	Model_Test
 * 	@Date		:	24 July 2015
 * 	@Description:	
 * 	@MOdified : 
 * 					*/
class Model_Test extends Model_Database {
 
//    public function __construct($id = NULL)
//	{
//		// load database library into $this->db (can be omitted if not required)
//		parent::__construct($id);
//	}
//	
    public function save_tent(){
        // check if anything same is insert if yes then return the number again
        if(isset($_POST) && isset($_POST['fname'])){
            $sql = 'INSERT INTO tent(firstname, lastname, tent, fromdate, todate, mobile, state, zone, branch, unit, luggage, adhikari, totalmp, created_date) VALUES ("'.$_POST['fname'].'", "'.$_POST['lname'].'", "'.$_POST['tent'].'", "'.$_POST['fromdate'].'", "'.$_POST['todate'].'", "'.$_POST['mobile'].'", "'.$_POST['state'].'", "'.$_POST['zone'].'", "'.$_POST['branch'].'", "'.$_POST['unit'].'", "'.$_POST['luggage'].'", "'.$_POST['adhikari'].'", "'.$_POST['totalmp'].'", NOW())';    
            $entry_id = $this->_db->query(Database::INSERT, $sql, False);
            
            $this->send_sms($entry_id[0]);

            return $entry_id[0];
        } else {
            return false;
        }
    }
    
    private function check_sms($number){
        $sql = 'SELECT * FROM sms_log WHERE number="'.$number.'"';
        $result     =   DB::query(Database::SELECT, $sql)->execute()->as_array();
        if(isset($result[0]) && isset($result[0]['id'])){
            return false;
        } else {
            return true;
        }
    }
    
    private function send_sms($entry_id){
        // Account details
        $apiKey = urlencode('ITvS+URI3aw-boRpjOSIMoOnF8uc5BfY2LfXmZoxQF');

        $number = '91'.$_POST['mobile'];
        
        if($this->check_sms($number)){
            // Message details
            $numbers = array((int)$number);
            $sender = urlencode('TXTLCL');
            $message = rawurlencode('Welcome your tent gate pass number: '.$_POST['tent'].'-'.$entry_id);

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
            $json_o = json_decode($response);

            // insert 
            $sql = 'INSERT INTO sms_log(number, message, sender, batch_id, status, msg_id, balance, created_date) VALUES ("'.$number.'", "'.$message.'", "'.$sender.'", "'.$json_o->batch_id.'", "'.$json_o->status.'", "'.$json_o->messages[0]->id.'", "'.$json_o->balance.'", NOW())';    

            $entry_id = $this->_db->query(Database::INSERT, $sql, False);
            return $json_o->status;
        } else {
            return false;
        }
    }
    
    public function check_tent($id){
        // check if anything sameis insert if yes then return the number again
        $sql = 'SELECT * FROM tent WHERE id="'.$id.'"';
        $result     =   DB::query(Database::SELECT, $sql)->execute()->as_array();
        if(isset($result[0]) && isset($result[0]['id'])){
            return $result;
        } else {
            return false;
        }
    }
    
	public function check() { 
        $return_html='';
        $return_html+='<table cols="6"><th>Table</th><th>Data Size</th><th>Index Size</th><th>Total size</th><th>Total Rows</th><th>Avg. Size per Row</th>';
        
        $sql	=	"SHOW TABLE STATUS FROM test";
        $query	=	DB::query(Database::SELECT, $sql);
        $result	=	$query->execute()->as_array();

        while($array = mysql_fetch_array($result)) {
            $total = $array[Data_length]+$array[Index_length];

            if ( $array[Data_length] > 0 ) {
                $return_html+='<tr><td align="center">';
                $return_html+=' ' . $array[Name] . '<br /></td><td align="center">';

                if ( $array[Data_length] < 1024 ) {
                    $return_html+= ' '.$array[Data_length].'</td><td align="center">';
                } elseif ( ($array[Data_length] > 1024) && ($array[Data_length] < 1048576 ) ) {
                    $return_html+=$array[Data_length]/1024;    
                    $return_html+='</td><td align="center">';
                } elseif ( $array[Data_length] >= 1048576 ) {
                    $return_html+=$array[Data_length]/1048576;
                    $return_html+='</td><td align="center">';
                }
                if ( $array[Index_length] < 1024 ) {
                    $return_html+= ' '.$array[Index_length].'<br /></td><td align="center">';
                } elseif ( ($array[Index_length] > 1024) && ($array[Index_length] < 1048576 ) ) {
                    $return_html+=$array[Index_length] / 1024;    
                    $return_html+='<br /></td><td align="center">';
                } elseif ( $array[Index_length] >= 1048576 ) {
                    $return_html+=$array[Index_length] / 1048576;
                    $return_html+='<br /></td><td align="center">';
                }
                if ( $total < 1024 ) {
                    $return_html+=' '.$total.'<br /></td><td align="center">';
                } elseif ( ($total > 1024) && ($total < 1048576 ) ) {
                    $return_html+=$total / 1024;    
                    $return_html+='<br /></td><td align="center">';
                } elseif ( $total >= 1048576 ) {
                    $return_html+=$total / 1048576;
                    $return_html+='<br /></td><td align="center">';
                }    
                $return_html+=''.$array[Rows].'</td><td align="center">'.$array[Avg_row_length].'</td></tr>';
            }
        }
    }
}