<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Admin extends MY_Model
{
	public function login($Email, $Password, $redirect)
	{
		$Query = $this->SelectAllWhere("admin", array("email"=>$Email, "password"=>$Password));
		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			$this->session->set_userdata('Admin_Login',$Result[0]->id);
			$this->session->set_userdata('Admin_Name',$Result[0]->FirstName." ".$Result[0]->LastName);
			date_default_timezone_set("Asia/Kolkata");
			$date = date('Y-m-d H:i:s');
			if($redirect)
			{
				$this->session->unset_userdata('Redirect');
				redirect($redirect);
			}
			else
			{
				redirect(base_url()."admin/dashboard");
			}
		}
		else
		{
			return "Invalid email or password";
		}
	}
	public function is_login()
	{
		if($this->session->userdata('Admin_Login'))
		{
			return true;	
		}
		else
		{ return false; }
	}
	
	
	public function getDetail($id){
	$Query = $this->SelectAllWhere("admin", array("id"=>$id));
	if ($Query->num_rows() > 0){
	   $Result = $Query->result();
	   return $Result[0];
	}
	}
	
	
	
	
	public function update($Array){
	
	if($this->UpdateAll("admin", $Array, array("id"=>$this->session->userdata('Admin_Login'))))
	{
		return "Profile Updated Successfully";
	}
	}
	
	
	  public function resetPassword($Email){
	$Query = $this->SelectAllWhere("admin", array("email"=>$Email));
	if ($Query->num_rows() > 0){
		$Result = $Query->result();
		$new=random_string('alnum', 8);
		/*$this->load->library('email');
		$this->email->clear();
		$this->email->initialize();
		$this->email->to($Email);
		$this->email->from('admin@veganfirst.com');
		$this->email->subject('Your New Password for Vegan First');*/
		$message= 'Hi '.$Result[0]->FirstName.', <br/> Your new password for Vegan Login is :  '.$new;
		//$this->email->send();


				$this->SendMail($Email,"Your New Password for Vegan First Admin ",$message);
		
		$res=$this->UpdateAll("admin",array("password"=>$new),array('id'=>$Result[0]->id));
		if($res)
		{	  
	   //$this->session->set_userdata('Admin_Login',$Result[0]->id);
		return "New Password is Sended to your Email";
		}
	   }else{
		  return "Invalid admin email";
	   }
	}
	
	
}