<?php defined('SYSPATH') or die('No direct script access.');
ini_set('max_execution_time', 3000);

/**
 * 	@File		:	login.php Model
 * 	@Class		:	Model_Test
 * 	@Date		:	12 Nov 2017
 * 	@Description:	
 * 	@MOdified : 
 * 					*/
class Model_Login extends Model_Database {
 
    public function check_login(){
        $sql = "SELECT * FROM tent_admin WHERE username='".$_POST['username']."' AND password='".$_POST['password']."'";
        $result     =   DB::query(Database::SELECT, $sql)->execute()->as_array();
        if(isset($result[0]) && isset($result[0]['id'])){
            return $result[0];
        } else {
            return false;
        }
    }
    
}
    