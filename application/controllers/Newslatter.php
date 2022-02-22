<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);
error_reporting(E_ALL);
class Newslatter extends MY_Controller{
    public function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
        $this->load->model("M_User");
        $this->M_User = new M_User();
		$this->load->model("M_Site");
       
    }

		public function index(){
		$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Subscribe'";
		$this->db->query($sql);

			
		
		$seo= $this->M_Site->getSeo('newsletter');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
				
					if ($this->agent->is_mobile('ipad')) {
					  $this->load->view('frontend/newslatter',$data);
					}
					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/newslatter", $data);
					 }
					 else
					{
					   $this->load->view('frontend/newslatter',$data);
					}
		}    
    
	
	public function subscribe()
	{
		if ($_POST)
		{
		    if(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    else
		    {
			$sub=$this->M_User->Subscribe($_POST);
			 echo  json_encode( array('id'=>0,'msg'=>$sub) );
		    }
		}
	}
	
	public function unsubscribe($email){
				$sub=$this->M_User->unSubscribe($email);
			
			echo "<script>
					alert('".$sub."');
					window.location.href='".base_url()."';
					</script>";
			
    }
   public function subs()
	{
		
		if($_POST['form_type'] == 'Subscribe'):
			if(empty($_POST['name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Name") );
		    elseif(empty($_POST['email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['city']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your City") );
		    else
		    {
		        
        		$data['name']= $_POST['name'];
        		$data['email']= $_POST['email'];
        		$data['city']= $_POST['city'];
        		date_default_timezone_set("Asia/Kolkata");
                $data['subOn'] = date("Y-m-d H:i:s");
        		if($this->db->insert('subscribe',$data))
        		{
        		echo  json_encode( array('id'=>1,'msg'=>"You have successfully subscribed!"));
        		}
		        
		    }
		endif;
		
		
		if($_POST['form_type'] == 'Contribute'):
		
		    if(empty($_POST['Name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Name") );
		    elseif(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['exp']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Experties") );
		    else
		    {
			$message = "<p>Hi,<p/><p>".$_POST['Name']." is interested for contribute a story!<p/>"."<p>Name : ".$_POST['Name']."</p><p>Email : ".$_POST['Email']."</p></p>"."<p>Designation : ".$_POST['desg']."</p><p>Experties : ".$_POST['exp']."</p><p>Writing Experience : ".$_POST['wexp']."</p><p>Writing Sample : ".$_POST['wsample']."</p>";
			$this->M_User->SendMail(SITE_EMAIL,"Contribute a Story!",$message);
			echo  json_encode( array('id'=>1,'msg'=>"Thank you for your inetrest. Our team will contact you shortly."));
			}
		endif;
		
		
		if($_POST['form_type'] == 'Advrt'):
		
			if(empty($_POST['Name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Name") );
		    elseif(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['phone']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Phone Number") );
			elseif(empty($_POST['budget']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Phone Budget") );
		    else
		    {
			$message = "<p>Hi,<p/><p>".$_POST['Name']." is interested for Advertisement with us!<p/>"."<p>Name : ".$_POST['Name']."</p><p>Email : ".$_POST['Email']."</p></p>"."<p>Company Name : ".$_POST['cname']."</p><p>Website : ".$_POST['web']."</p><p>Phone : ".$_POST['phone']."</p><p>Budget : ".$_POST['budget']."</p>";
			$this->M_User->SendMail(SITE_EMAIL,"Interested for Advertisement!",$message);
			echo  json_encode( array('id'=>1,'msg'=>"Thank you for your inetrest. Our team will contact you shortly."));
			}
		endif;
		
		if($_POST['form_type'] == 'conference'):
		
			if(empty($_POST['Name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Name") );
		    elseif(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['phone']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Phone Number") );
			elseif(empty($_POST['interest']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Select Your Interest") );
		    else
		    {
			$message = "<p>Hi,<p/><p>".$_POST['Name']." is interested for Join Conference with us!<p/>"."<p>Name : ".$_POST['Name']."</p><p>Email : ".$_POST['Email']."</p><p>Phone : ".$_POST['phone']."</p></p>"."<p>City : ".$_POST['city']."</p><p>Country : ".$_POST['country']."</p><p>Interest : ".$_POST['interest']."</p>";
			$this->M_User->SendMail(SITE_EMAIL,"Interested for Join Conference!",$message);
			echo  json_encode( array('id'=>1,'msg'=>"Thank you for your inetrest. Our team will contact you shortly."));
			}
		endif;
		
		if($_POST['form_type'] == 'B2B'):
		
			if(empty($_POST['Name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Name") );
		    elseif(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['phone']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Phone Number") );
			elseif(empty($_POST['iam']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Select Your Bussiness Type") );
		    else
		    {
			$message = "<p>Hi,<p/><p>".$_POST['Name']." is interested for Join Conference with us!<p/>"."<p>Name : ".$_POST['Name']."</p><p>Email : ".$_POST['Email']."</p><p>Phone : ".$_POST['phone']."</p></p>"."<p>Bussiness Type : ".$_POST['iam']."</p><p>Company Name : ".$_POST['cname']."</p><p>Speciality : ".$_POST['speciality']."</p><p>Connect With : ".$_POST['connectwith']."</p>";
			
			
			$this->M_User->SendMail(SITE_EMAIL,"Interested for Join Conference!",$message);
			echo  json_encode( array('id'=>1,'msg'=>"Thank you for your inetrest. Our team will contact you shortly."));
			}
		endif;
		
		
	}
}