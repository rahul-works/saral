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
            return $entry_id[0];
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