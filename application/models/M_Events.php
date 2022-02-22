<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_Events extends MY_Model {
	
	
	public $M_Events;
    public function __construct() {
        parent::__construct();
		
    }
	
	
	
	public function	getAllEvents()
	{
	
        //$Query = $this->SelectAll('event_detail');
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->order_by("idevent", 'DESC');
		$Query = $this->db->get(); 
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
   
	}
	
	public function	getAllPastEvents()
	{
	    $date = date('Y-m-d');
	
        //$Query = $this->SelectAll('event_detail');
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->order_by("idevent", 'DESC');
		$this->db->where("event_date <", $date);
		$Query = $this->db->get(); 
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
   
	}
	public function	getAllUpcomingEvents()
	{
	    $date = date('Y-m-d');
	
        //$Query = $this->SelectAll('event_detail');
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->order_by("idevent", 'DESC');
		$this->db->where("event_date >=", $date);
		$Query = $this->db->get(); 
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
   
	}
	
	public function	getEventdetail($id)
	{
	
        //$Query = $this->SelectAll('event_detail');
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->where("idevent", $id);
		$Query = $this->db->get(); 
		
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
   
	}

	public function	getEventdetailbyurl($id)
	{
	
        //$Query = $this->SelectAll('event_detail');
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->where("event_url", $id);
		$Query = $this->db->get(); 
		
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
   
	}


	
 public function getDateEvent($year, $month){
  $year  = ($month < 10 && strlen($month) == 1) ? "$year-0$month" : "$year-$month";
  $query = $this->db->select('event_date, idevent')->from('event_detail')->like('event_date', $year, 'after')->get();
  if($query->num_rows() > 0){
   $data = array();
   foreach($query->result_array() as $row){
    $data[(int) end(explode('-',$row['event_date']))] = $row['idevent'];
   }
   return $data;
  }else{
   return false;
  }
 }
 
 
 
 public  function getDateid($wwdate){
  
  $query = $this->db->select('event_date, idevent')->from('event_detail')->like('idevent', $wwdate, 'after')->get();
  if($query->num_rows() > 0){
   foreach($query->result_array() as $row){
    $data = $row['event_date'];
   }
   return $data;
  }else{
   return false;
  }
 }
  
 // get event detail for selected date
 public function getEvent($edate){
  
  $query = $this->db->select('idevent as id')->order_by('event_time')->get_where('event_detail', array('event_date' => $edate));
  if($query->num_rows() > 0){
   return $query->result_array();
  }else{
   return null;
  }
 }
  
 // insert event
 public function addEvent($array){
	$edate = $array['event_date']; 
	//$edate =date_format($date,'Y-m-d'); 
	//$time = date('H:i:s ', $array['event_time']); 
	//$time =$timee->format('H:i:s');
	
	$event =$array['event_title'];
	$event_deas =$array['event_deac'];
	$addr =$array['Address'];
	$cont =$array['Contact'];
	$time=$array['event_time'];
        $Url = $this->CreateSlug($event);

      $this->db->insert('event_detail', array('event_date' => "$edate", 'event_time' => $time, 'event_title' => $event,'event_url' => $Url, 'event_deac'=>$event_deas,'addr'=>$addr,'contact'=>$cont));
  
   
 }
 
 
 
  
 // delete event
 public function deleteEvent($id){
  $this->db->delete("event_detail", array('idevent' => $id));
  
 }
 
 public function updateEvent($idPage, $Array)
 {
	$this->UpdateAll("event_detail",$Array,array('idevent'=>$idPage));
	    
	 
 }
 
}
?>