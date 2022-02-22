<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);
error_reporting(E_ALL);
class Comment extends MY_Controller{
    public function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
        $this->load->model("m_user");
        $this->M_User = new M_User();
       
    }
	
	
	public function articlePost(){
		$uid=$this->session->userdata('User_id');
		date_default_timezone_set("Asia/Kolkata");
            
		$data = array(
			'idUser'=>$uid,
       		'idArticle' => $this->input->post('idArticle'),
       		'comment' => $this->input->post('comment'),
	   		'posted' =>date("Y-m-d H:i:s")
		);
		$idcmt=$this->db->insert('article_cmt',$data);
		
		if($idcmt) :
		$cmmnt=$this->input->post('comment');
		$user= $this->M_User->getUserInfo($uid);
		$base= base_url();
		$img=$base.'media/upload/user/'.$user->ProfilePic;
		$userx=$base.'user/profile/'.$uid;
		
		
		echo "<div class='row' id='cmmt' style='border-bottom: 1px solid #efefef;margin-bottom: 10px;padding: 0 10px;'>
                    	<div class='col-sm-1' style='padding: 0 10px;'>
                        	<img src='$img' style='width: 50px;' class='img-responsive img-rounded img-circle center-block'>
                        </div>
                        <div class='col-sm-11' style='padding:0'>
                        	<h4 style='margin: 0;'><a href='javascript:void(0);' style='color:#3f9b38'>$user->Name</a></h4>
                            <p style='margin: 0;font-size: 12px;'>$cmmnt</p>
                            <p style='margin: 0;font-size: 11px;color: #b9b9b9;'>Just Now</p>
                        </div>
                    </div>";
		
		
	endif;	
	}
	

}