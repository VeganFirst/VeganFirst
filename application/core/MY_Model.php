<?php

/**
 * Name : MY_Model
 * Description: Extending the Codeigniter CI_Model functionality into My_Model for Basic CRUD
 * Purpose : In future Updates in CodeIgniter we can adopt this by just simple change of this blueprint
 * CI Version : 2.2.0
 * Dated : 27 Aug 2014 1:00:00 PM 
 * Version : 1.0  for this blueprint
 * @author Administrator
 */
class MY_Model extends CI_Model {

    /**
     * @name __contruct 
     * @decription : Overrides the parent contructor Default call when instantiating the class
     * @author Muazzam Ali 
     * @return class object;
     */
    public function __construct() {
        parent::__construct(); // parent constructor 
    }

    /**
     * @name $Insert
     * Description: Insert data into the table required params
     * @param string $tbl table name in string
     * @param array $PostData  data for save
     * @return boolean 
     */
    function Insert($tbl, $PostData) {
        return $this->db->insert($tbl, $PostData);
    }
	function SelectAll($tbl) {
        return $this->db->get($tbl);
    }

    /**
     * 
     * @param string $tbl table name in string
     * @param array $where filter by Entity coloum name with value
     * @param int $limit (Nullable not required)limit the records
     * @param int $offset (Nullable not required) pointer the  
     * @return mysql result array of arrays
     */
    function SelectAllWhere($tbl, $where, $limit = NULL, $offset = NULL) {
        return $this->db->get_where($tbl, $where, $limit, $offset);
    }

    /**
     * 
     * @param string $tbl table name in string
     * @param array $columns Entity columns name in string
     * @return mysql result array of arrays
     */
    function SelectSelected($tbl, $columns) {
        $this->db->select($columns);
        return $this->db->get($tbl);
    }

    /**
     * 
     * @param string $tbl table name in string
     * @param array $columns Entity Columns name
     * @param array $where filter by Entity coloum name with value
     * @return mysql result array of arrays
     */
    function SelectSelectedWhere($tbl, $columns, $where) {
        $this->db->select($columns);
        return $this->db->get_where($tbl, $columns, $where);
    }

    /**
     * 
     * @param string $tbl table name
     * @param array $postData key value pair of Entity coloum with value
     * @param array $where update where selected colum with values
     * @return array Mysql result array
     */
    function UpdateAll($tbl, $postData, $where = NULL) {
        if (isset($where)) {
            $this->db->where($where);
        }
        return $this->db->update($tbl, $postData);
    }

    /**
     * 
     * @param string or Array $tbl table name
     * @param array $where
     * @note if you want to delete data from multiple table pass table name array
     *       as 1 parameter otherwise table name in string
     * @return boolean Status isDeleted of Not
     */
    function Delete($tbl, $where) {
        if (isset($where)) {
            $this->db->where($where);
        }
        return $this->db->delete($tbl);
    }

    /**
     * 
     * @param string $tbl table name
     * @return int count of total records in a table
     */
    function SelectCount($tbl, $where=NULL) {
        if (isset($where)) {
            $this->db->where($where);
        }
        return $this->db->count_all($tbl);
    }
    
    public function UniqueID(){
        $Query = $this->db->query("select UUID() as UniqueID");
        $row = $Query->result();
        return $row[0]->UniqueID;
    }
    
    public function CountRows($tbl,$where){
        $Query = $this->SelectAllWhere($tbl, $where);
        return $Query->num_rows;
    }
    
    public function GetStatus($StatusID){
        $Query = $this->User->SelectAllWhere("status", array("idStatus"=>$StatusID));
        $Row = $Query->result();
        return $Row[0]->Name;
    }
    
    public function PrintArray($Array){
        echo "<pre>";
            print_r($Array);
        echo "</pre>";
    }
    
    public function getCountries(){
        $Query = $this->SelectAll("countries");
        $Result = $Query->result();
        return $Result;
    }
    
    

    public function CreateSlug($value){
	$string = $value;
	$replacements = array(
		"&"=>"and",
		"("=>"",
		")"=>"",
		"*"=>"",
		"/"=>"",
		" "=>"-",
		"%"=>"",
		"@"=>"",
		"'"=>"",
		"."=>"",
		","=>"",
		"["=>"",
		"]"=>""
	);
	return strtolower(str_replace(array_keys($replacements), $replacements, $string));
    }
    
    public function convertDateToPHP($date){
        $explode = explode("/", $date);
        $day = $explode[1];
        $month = $explode[0];
        $year = $explode[2];
        
        return $year."-".$month."-".$day;
    }
    
    public function convertDateToCalander($date){
        $explode = explode("-", $date);
        $day = $explode[2];
        $month = $explode[1];
        $year = $explode[0];
        
        return $month."/".$day."/".$year;
    }
    
    public function SendMail($To,$Subject,$Message,$rpl='admin@veganfirst.com',$nm='Vegan First'){
		
		$configs = array(
			
			'mailtype'  => 'html',
			'smtp_timeout' => '4', 
            'charset'   => 'iso-8859-1'
		);
		
		
		
	$this->load->library("email", $configs);
        $this->email->set_newline("\r\n");
        $this->email->to($To);
        $this->email->from("admin@veganfirst.com", "Vegan First");
        $this->email->reply_to($rpl, $nm);
        $this->email->subject($Subject);
        $this->email->message($Message);
        if($this->email->send())
        {
            return true;  
        }
        else
        {
            return false;   
        }
		
		
		
		
       /* $headers = array("From: Vegan First <no-reply@veganfirst.com>","Content-Type: text/html");
        $mail = mail($To,$Subject,$Message,implode("\r\n", $headers));
        if ($mail){
            return true;
        }else{
            return false;
        }*/
    }
    
    
}
