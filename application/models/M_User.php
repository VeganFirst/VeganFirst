<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_User extends MY_Model{
    public $M_User;
    public function __construct() {
        parent::__construct();
		
    }
    
    public function RegisterUser($Array){
       $Array2['Name']=$Array['Name'];
	    unset($Array['Name']);
        if (!$this->isEmailExists($Array['Email']))
        {
			date_default_timezone_set("Asia/Kolkata");
            $Array['RegDate'] = date("Y-m-d H:i:s");
            $Array['status'] = 1;
			$letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
   			$Array['Activation']= md5(substr(str_shuffle($letters), 0, 8));
			
			
			$this->db->insert('user', $Array);
		        $id = $this->db->insert_id();
			$Array2['idUser']=$id;
			$insert = $this->Insert("user_info", $Array2);
			if($Array['subscribe'])
			{
			 $this->Subscribe($Array);
			}
			$message ="<p>Hi ".$Array2['Name'].",<br/>We're almost done! Please verify your email by clicking the button below!<br/><br/> <a href=".base_url().'user/activate/'.$Array['Activation']."><button style='padding:5px 10px; background:#bdc65b; color:#fff; border-radius:5px;cursor: pointer;'>Activate</button></a></p><p>Thank you!<br/>Have a great day!<br/>Vegan First Team</p><p style='font-size:8px'>This is a Computer-generated email, please do not reply to this message.</p>";
			$this->SendMail($Array['Email'],"Please Activate Your Account!",$message);
			if($insert)
			{
				return true;
			}
	}
	else
	{
       		return false;
	}
		 
		 
  
	//return true; 
	//}
}
	
	public function Activate($key)
	{
	//$Query = $this->SelectAllWhere("user", array("Activation" => $key));

    $this->db->select('*');
	$this->db->from('user');
	$this->db->where('Activation', $key);
	
        $Query = $this->db->get();
        if ($Query->num_rows() > 0){
			$Result = $Query->result();
			$id = $Result[0]->idUser;
			$Array['status'] = 1;
   			$Array['Activation']= NULL;
			date_default_timezone_set("Asia/Kolkata");
            $Array['LastLogin'] = date("Y-m-d H:i:s");
			$this->UpdateAll("user",$Array,array('idUser'=>$id));
			$this->session->set_userdata('User_id',$Result[0]->idUser);
	   		$this->session->set_userdata('User_Name',$Result[0]->Email);
			
			$this->db->select('*');
			$this->db->from('user_info');
			$this->db->where('idUser', $Result[0]->idUser);
			$Queryx = $this->db->get();
        	        if ($Queryx->num_rows() > 0){
			$Resultx = $Queryx->result();
			
			$Name=$Resultx[0]->Name;
			
			
			
			$message ="<p>Hi ".$Name.",<br/>Your Vegan First account is now active. We hope you enjoy browsing articles, recipes and getting connected with like minded people!</p><p>Thank you!<br/>Have a great day!<br/>Vegan First Team</p><p style='font-size:8px'>This is a Computer-generated email, please do not reply to this message.</p>";
		
		    $this->SendMail($Result[0]->Email,"Your Vegan First account is now active!",$message);
			}
			
			
			redirect(base_url()."user/dashboard");
			
		}
	}
	public function RegisterUserFb($Array){
        $Query = $this->SelectAllWhere("user", array("Email" => $Array['email']));
        if ($Query->num_rows() < 1){
            
            $Arrayf['Email'] = $Array['email'];
			$Arrayf['Password'] =$Array['id'];
            $Arrayf['status']=1;
			date_default_timezone_set("Asia/Kolkata");
            $Arrayf['RegDate'] = date("Y-m-d H:i:s");
            $this->db->insert('user', $Arrayf);
		    $id = $this->db->insert_id();
			$Array2['idUser']=$id;
            $Array2['Name']=$Array['name'];
            if(isset($Array['gender']))
			$Array2['gender']=ucwords($Array['gender']);
			
			$this->Insert("user_info", $Array2);
			
			unset($Arrayf['Password']);
            unset($Arrayf['RegDate']);
            unset($Arrayf['status']);
			$this->Subscribe($Arrayf);
            $this->session->set_userdata('User_id',$id);
   			$this->session->set_userdata('User_Name',$Array['email']);
				
			date_default_timezone_set("Asia/Kolkata");
			$date = date('Y-m-d H:i:s');
			$this->UpdateAll("user",array("LastLogin"=>$date),array('idUser'=>$id));
			//redirect(base_url()."user/dashboard");
			redirect($_SESSION['redirect']);
			
        }else{
            $Result = $Query->result();
           	$this->session->set_userdata('User_id',$Result[0]->idUser);
   			$this->session->set_userdata('User_Name',$Result[0]->Email);
			date_default_timezone_set("Asia/Kolkata");
			$date = date('Y-m-d H:i:s');
			$this->UpdateAll("user",array("LastLogin"=>$date),array('idUser'=>$Result[0]->idUser));
			if(!empty($_SESSION['redirect']))
			redirect($_SESSION['redirect']);
			else
            return true;
        }
    }
	
	public function Subscribe($Array){
		
		if(!$this->isSubscribed($Array['Email']))
		{
			date_default_timezone_set("Asia/Kolkata");
            $Array['subOn'] = date("Y-m-d H:i:s");
            $tntfor = "";
            if(isset($Array['type_id'])):
            foreach ($Array['type_id'] as $color){
                $tntfor.= $color.",";
            }
            else:
            $tntfor = "All";    
            endif;
            
            $Array['type_id'] = $tntfor;
            
			$this->db->insert('newslatter', $Array);
			$idins = $this->db->insert_id();
			$unsub = base_url().'newsletter/unsubscribe/'.$idins;
			
			$message = "<p>Hi ".$Array['Email'].",<p/>
<p>You are now subscribed to Vegan First newsletters! Stay tuned for awesome recipes, interesting articles and more!<br/> 
The good news is that we do not spam! :)<p/>
<p style='font-size:10px'>If you wish to unsubscribe please <a href='$unsub'>click here</a>.</p><p style='font-size:8px'>This is a Computer-generated email, please do not reply to this message.</p>";
			
			$this->SendMail($Array['Email'],"Subscribed successfully!",$message);
			return "You have successfully subscribed to our newsletter!";
				

		}
		else
		{
			return "You Have already Subscribed to our newsletter!";
		}
            
       
    }
	
	
	public function unSubscribe($email){
		
		if(!$this->isSubscribed($email))
		{
			$this->Delete("newslatter", array("idSub"=>$email));
			return "You have successfully unsubscribed to our newsletter!";
		}
		else
		{
			return "You Have not Subscribed to our newsletter!";
		}
            
       
    }
	
	
	
	
	
	public function changepwd($da)
	{
		$Array['Password'] = $da['password'];
	$this->UpdateAll("user",$Array,array('idUser'=>$this->session->userdata('User_id')));
return true;
	
	}
	
	public function isSubscribed($Url){
        $Query = $this->SelectAllWhere("newslatter", array("Email"=>$Url));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
	
	
	public function getSubscriber(){
 		$this->db->select('*');
		$this->db->from('newslatter');
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }

	public function isEmailExists($Url){
        $Query = $this->SelectAllWhere("user", array("Email"=>$Url));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
	
	
	public function getLogin($Array){
		$email=$Array['email'];
		$pass=$Array['password'];
        $Query = $this->SelectAllWhere("user", array("Email"=>$email, "Password"=>$pass));
        if ($Query->num_rows() > 0){
			$Result = $Query->result();
			if($Result[0]->status==0)
			{
				return "Please Verify your Email";
			}
			elseif($Result[0]->banned==1)
			{
				return "Your Account is Banned!";
			}
			
			else
				{
			    if(isset($Array['Remember']))
				{
				setcookie('User_remember', 1, time() + (86400 * 30), "/");
				setcookie('User_em', $email, time() + (86400 * 30), "/");
				setcookie('User_pw', $pass, time() + (86400 * 30), "/");	
				}
 	   			$this->session->set_userdata('User_id',$Result[0]->idUser);
	   			$this->session->set_userdata('User_Name',$Result[0]->Email);
				
				
				
				
				date_default_timezone_set("Asia/Kolkata");
				$date = date('Y-m-d H:i:s');
  				$this->UpdateAll("user",array("LastLogin"=>$date),array('idUser'=>$Result[0]->idUser));
				redirect($_POST['redirect']);
			}
				
				
			
        }else{
            return "Invalid Email or Password";
        }
    }

public function Update($Array){
	
		 $config['upload_path']   = 'media/upload/user/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 3000; 
         $config['max_width']     = 2024; 
         $config['max_height']    = 1768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
            //$data = array('data' => $this->upload->data());
			$image_data = $this->upload->data() ; 
             $Array['ProfilePic'] = $image_data['file_name'];
         } 
		
		
		unset($Array['file']);

$this->UpdateAll("user_info",$Array,array('idUser'=>$this->session->userdata('User_id')));
return true;

}

	public function getAllUsers(){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_info', 'user_info.idUser = user.idUser');
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
		
	}
	
	public function getMsg($user){
		
		$this->db->select('mfrom,mto');
		$this->db->from('message');
		$this->db->where('mfrom',$user);
		$this->db->or_where('mto',$user);
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
	
	}
	
	
	public function getMsgus($user){
		
		$this->db->select('*');
		$this->db->from('message');
		$this->db->where('mfrom',$user);
		$this->db->or_where('mto',$user);
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
	
	}
	
	public function getUsr($user){
		$uid=$this->session->userdata('User_id');
		$this->db->select('*');
		$this->db->limit(16);

		$this->db->from('user_info');
		$this->db->join('user', 'user.idUser = user_info.idUser');
		$this->db->where('user.banned',0);
                $this->db->where('user.status',1);
		$this->db->like('user_info.Name',$user);
		$this->db->where('user_info.idUser !=',$uid);
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
		
	}

	
    
    
    public function isUserLogin(){
        if (isset($_SESSION['UID'])){
            return $_SESSION['UID'];
        }else{
            return FALSE;
        }
    }
    
    public function getUserInfo($idUser){
        $Query = $this->SelectAllWhere("user_info", array("idUser"=>$idUser));
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
        $Result = $Query->result();
        return $Result[0];
		}
    }
	
	
	public function ResetPassword($Array){
	
		if (!$this->isEmailExists($Array['email'])){
			return false;
		}
		else
		{
			//return true;
			$letters = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
   			$new['Password']= substr(str_shuffle($letters), 0, 8);
			
			
			if($this->UpdateAll("user",$new,array('Email'=>$Array['email'])))
			{
				$message ="<p>Dear User,</p><p>Your New Password is : ".$new['Password']."</p><p>Regards,<br/>
Vegan First Team</p><p><img src='http://veganfirst.com/media/images/logo.png' style='max-width: 90px;' />
</p>";
				if($this->SendMail($Array['email'],"New Password Vegan First",$message))
				{
				return true;
				}
				else{
						return $this->SendMail($Array['email'],"New Password Vegan First",$message);
					}
			}
		}
	}
	public function get_unread_msg(){
	$uid=$this->session->userdata('User_id');
		$sql = "SELECT * FROM `message` WHERE `mto`=".$uid." and status=1";

        $Query = $this->db->query($sql);
		return $Query->num_rows;
        
    }
	
	public function get_unread_notification(){

	$uid=$this->session->userdata('User_id');
		$sql = "SELECT * FROM `user_notify` WHERE `idUser`=".$uid." and not_status=0";

        $Query = $this->db->query($sql);
		return $Query->num_rows;
        
    }
	
	public function get_unread_notifications(){
	$uid=$this->session->userdata('User_id');
		$sql = "SELECT * FROM `user_notify` WHERE `idUser`=".$uid." and not_status=0";

        $Query = $this->db->query($sql);
		
		$Result = $Query->result();
        return $Result;

        
    }
	
	public function get_unread_msg_user($id){
	$uid=$this->session->userdata('User_id');
		$sql = "SELECT * FROM `message` WHERE `mto`=".$uid." and mfrom=".$id." and status=1";

        $Query = $this->db->query($sql);
		return $Query->num_rows;
    }
	
	public function Bann($id){
	$new['banned']= 1;
	$this->UpdateAll("user",$new,array('idUser'=>$id));
        
    }
	public function unBann($id){
	$new['banned']= 0;
	$this->UpdateAll("user",$new,array('idUser'=>$id));
        
    }
	public function getFollowersbyID($uid)
	{
		$this->db->select('*');
		$this->db->from("user_follow");
		$this->db->where("idUser",$uid);
	
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows();
		}
		else
		{
			return 0;
		}
	}
	
	public function getFollowingbyId($uid)
	{
		$this->db->select('*');
		$this->db->from("user_follow");
		$this->db->where("idAuthor",$uid);
	
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows();
		}
		else
		{
			return 0;
		}
	}
	
	public function get_sent_msg_user($id){
		$sql = "SELECT * FROM `message` WHERE  mfrom=".$id." and status=1";

        $Query = $this->db->query($sql);
		return $Query->num_rows;
    }
	public function get_rec_msg_user($id){
		$sql = "SELECT * FROM `message` WHERE  mto=".$id." and status=1";

        $Query = $this->db->query($sql);
		return $Query->num_rows;
    }


}