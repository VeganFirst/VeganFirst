<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);
error_reporting(E_ALL);
class User extends MY_Controller
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model("M_User");
		$this->M_User = new M_User();

		$this->load->model("M_Article");
		$this->M_Article = new M_Article();

		$this->load->model("M_Category");
		$this->M_Category = new M_Category();

		$this->load->model("M_Restaurant");
		$this->M_Restaurant = new M_Restaurant();
		
		$this->load->model("M_Recipes");
		$this->M_Recipes = new M_Recipes();
		$this->load->model("M_Author");
		$this->M_Author = new M_Author();
		$this->load->library("Facebookapp");
		$this->Facebookapp = new Facebookapp();
		$this->load->model("M_Events");
		$this->M_Events = new M_Events();
	}
	public function index()
	{
		if ($_POST)
		{
		   $LoginErrorMessage = $this->M_User->login($_POST['email'], $_POST['password'],$_POST['redirect']);
			$data['LoginErrorMessage'] = $LoginErrorMessage;
		}
		else
		{
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view('frontend/login');
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/login");
            }
            else
            {
				$this->load->view('frontend/login');
            }
		}
	} 
	public function changepwd()
	{
		if ($_POST)
		{
			if($this->M_User->changepwd($_POST))
				$data['message']= "Password Changes";
			$uid=$this->session->userdata('User_id');
			$data['User']=$this->M_User->getUserInfo($uid);
			$data['PageTitle']="User Profile";
			
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view("user/profile",$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/profile",$data);
            }
            else
            {
				$this->load->view("user/profile",$data);
            }
		}
	} 
	public function dashboard()
	{
		if($this->session->userdata('User_id'))
		{
			$uid=$this->session->userdata('User_id');
			$data['User']=$this->M_User->getUserInfo($uid);
			$data['PageTitle']="User Profile";
			$data['Restros'] = $this->M_Restaurant->getReviewsByUser($uid);
			$data['Book_A'] = $this->MysaveArticle($uid);
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view("user/profile",$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/profile",$data);
            }
            else
            {
				$this->load->view("user/profile",$data);
            }
		}
		else
		{
			redirect(base_url()."user/login");	
		}
	}
	public function login_process()
	{
		$uid=$this->session->userdata('User_id');
		$userData = array();
        
		$url= $this->input->get('url');
		if($url)
		{
		    	$this->session->set_userdata('redirect', $url);
            
		}
		if($this->Facebookapp->is_authenticated()){
            $userProfile = $this->Facebookapp->request('get', '/me?fields=id,name,email');
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid'] = $userProfile['id'];
          
            $userData['email'] = $userProfile['email'];
            //$userData['gender'] = $userProfile['gender'];
 			$userData['name'] = $userProfile['name'];
			
            $userData['profile_url'] = 'https://www.facebook.com/'.$userProfile['id'];
			$userData['id'] = $userProfile['id'];
            //$userData['picture_url'] = $userProfile['picture']['data']['url'];

			if (!$uid){
			$this->M_User->RegisterUserFb($userData);
			
				redirect(Base_Url()."User/dashboard");

			}else{
				redirect(Base_Url()."User/dashboard");
			}

        }
		else{
		
		}
		redirect($this->Facebookapp->login_url());
		  
			
	}
	
	public function profile($uid)
	{
		//$uid=$this->session->userdata('User_id');
		if($this->session->userdata('User_id'))
		{
			$data['User']=$this->M_User->getUserInfo($uid);
			$data['PageTitle']="User Profile";
			$data['Restros'] = $this->M_Restaurant->getReviewsByUser($uid);
			$data['Book_A'] = $this->MysaveArticle($uid);
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view("user/profileview",$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/profileview",$data);
            }
            else
            {
				$this->load->view("user/profileview",$data);
            }

		}
		else
		{
			redirect(base_url()."user/login");	
		}
	}
	public function date_diff2 ($d1, $d2) 
	{
		$dif= round(abs(strtotime($d1)-strtotime($d2)));
		if($dif > 31104000)
		{
		$difr = round(abs($dif/31104000))." year ago";
		}
		
		elseif($dif > 2592000)
		{
		$difr = round(abs($dif/2592000))." month ago";
		}
		elseif($dif > 86400)
		{
		$difr = round(abs($dif/86400))." day ago";
		}
		elseif($dif > 3600)
		{
		$difr = round(abs($dif/3600))." hour ago";
		}
		elseif($dif > 60)
		{
		$difr = round(abs($dif/60))." minute ago";
		}
		else
		{
		$difr = $dif." second ago";
		}
		
		return $difr;
	}
	public function message()
	{
		if($this->session->userdata('User_id'))
		{
		$uid=$this->session->userdata('User_id');
		$data['User']=$this->M_User->getUserInfo($uid);
		$data['PageTitle']="User Profile";
		
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view("user/message",$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/message",$data);
            }
            else
            {
				$this->load->view("user/message",$data);
            }

		
		}
		else
		{
		redirect(base_url()."user/login");	
		}
	}
	public function send()
	{
		$uid=$this->session->userdata('User_id');
		date_default_timezone_set("Asia/Kolkata");
		$data = array(
		'mfrom'=>$uid,
	   'mto' => $this->input->post('msgto'),
	   'msg' => $this->input->post('message'),
	   'send' =>date("Y-m-d H:i:s"),
	   'status' =>1
		);
		$this->db->insert('message',$data);
		return true;
	}
	public function sendNew()
	{
		$uid=$this->session->userdata('User_id');
		date_default_timezone_set("Asia/Kolkata");
		$data = array(
		'mfrom'=>$uid,
	   'mto' => $this->input->post('msgto'),
	   'msg' => $this->input->post('message'),
	   'send' =>date("Y-m-d H:i:s"),
	   'status' =>1
		);
		$this->db->insert('message',$data);
		//return true;
		redirect(base_url()."user/message");
	}
	public function get_msg()
	{
		$user=$this->M_User->getUserInfo($_POST['id']);
		$uid=$this->session->userdata('User_id');
		$sql = "SELECT * FROM `message` WHERE `mfrom`=".$uid." and mto=".$_POST['id']." or `mto`=".$uid." and mfrom=".$_POST['id']."   ORDER BY `message`.`send` ASC";
		$Query = $this->db->query($sql);
		?>
		<div class="panel panel-primary">
			<div class="panel-heading" style="color: #FFFFFF; background-color: #6cbd45; border-color: #337ab7;">
			   <?php echo $user->Name ; ?>
			</div>
			<div class="panel-body scroll" id="scroll">
			<div id="cmtht">
				<ul class="media-list">
				<?php
					if($Query->result()) :
					foreach($Query->result() as $rs)
					{ 
						$post_time1 = $rs->send;
						date_default_timezone_set("Asia/Kolkata");
						$post_time3 =date('Y-m-d H:i:s');
						$post_t=$this->date_diff2($post_time1,$post_time3);
					
						$usrx=$rs->mfrom;
										
						if($rs->mto==$uid)
						{
							$arr['status']=2;//$rs->msg_id;
							$arr['mread']=$post_time3;
							$this->db->update('message', $arr, "msg_id = ".$rs->msg_id);
						}
						$user2=$this->M_User->getUserInfo($usrx);
					?>
					<li class="media">
						 <div class="media-body">
						 <div class="media">
						<a class="pull-left" href="<?php echo base_url().'user/profile/'.$user2->idUser?>" target="_blank">
						<?php if($user2->ProfilePic):?>
						<img class="media-object img-pro-med"  src="<?php echo base_url().'media/upload/user/'.$user2->ProfilePic?>" data-holder-rendered="true" >
						<?php else: ?>
						<img class="media-object img-pro-med" src="<?php echo base_url().'media/upload/user/generic-Pro-pic.jpg' ?>" >
						<?php endif; ?>
		   				</a>
						<div class="media-body" >
						<h4 class="pronam" style="float: left;margin: 0;"><?php echo $user2->Name; ?>
						<span class="text-muted text-left" style="font-size:12px"><?php echo $post_t?></span></h4>
						<p style="clear:both;"><?php echo $rs->msg; ?></p>
						</div>
					</div>
				</div>
	   		</li>
 			<?php	}
			else : ?>
			<?php	endif; ?>
			</ul>
 			</div>
			</div>
			<div class="panel-footer">
				<input type="hidden" name="msgto" id="msgto" value="<?php echo $user->idUser;?>" />
				<div class="input-group">
					<input type="text" id="message" name="message" required class="form-control" placeholder="Enter Message" />
					<span class="input-group-btn">
						<input type="button" onclick="SendMessage()" class="btn btn-success" name="send" value="Reply" />
					</span>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(document).ready(function() {

		$('div#scroll').animate({
					 scrollTop: $('div#cmtht').height()
				 },
				 0);
		});
		</script>
		<?php	
	}
	public function Searchuser()
	{
		$keyword=$this->input->post('keyword');
		if($keyword):
			$data=$this->M_User->getUsr($keyword);        
			$cnt=1;
			if($data) :
				foreach($data as $rs)
				{
					// put in bold the written text
					$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs->Name);
					// add new option
					if($cnt%2==0)
					{
					echo '<li  style="background-color: #dbdbdb;" onclick="set_item(\''.str_replace("'", "\'", $rs->Name).'\',\''.str_replace("'", "\'", $rs->idUser).'\')">'.$rs->Name.'  - ( '.$rs->city.' )</li>';
					}
					else
					{
						echo '<li  onclick="set_item(\''.str_replace("'", "\'", $rs->Name).'\',\''.str_replace("'", "\'", $rs->idUser).'\')">'.$rs->Name.'  - ( '.$rs->city.' )</li>';
					}
					$cnt++;
				}
			endif;
		endif;
	}
	public function SearchuserPro()
	{
		$keyword=$this->input->post('keyword');
		if($keyword):
			$data=$this->M_User->getUsr($keyword);        
			$cnt=1;
			if($data) :
				foreach($data as $rs)
				{
					$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs->Name);
					?>
					<div class="col-sm-6 col-xs-6" style="    padding: 5px 0;">
					<div class="col-sm-4">
					<?php if($rs->ProfilePic):?>
						<a href="<?php echo base_url().'user/profile/'.$rs->idUser;?>" target="_blank"><img src="<?php echo base_url().'media/upload/user/'.$rs->ProfilePic?>" class="img-responsive" style="widows:200px;" /></a>
					<?php else:?>
						<a href="<?php echo base_url().'user/profile/'.$rs->idUser;?>" target="_blank"><img src="<?php echo base_url().'media/upload/user/writer-pic.jpg';?>" class="img-responsive" style="widows:200px;" /></a>
					
					<?php endif;?>
					</div>
					<div class="col-sm-8">
					<a href="<?php echo base_url().'user/profile/'.$rs->idUser;?>" target="_blank"><?php echo $rs->Name?></a>
					<br/>
					<?php echo $rs->city?>
					</div>
					</div>
					<?php
					$cnt++;
				}
			endif;
		endif;
	}
	public function logout()
	{
		$this->session->sess_destroy();
		
		redirect(base_url());
	}
	public function login()
	{
		if ($_POST)
		{
			$data['Error']=$this->M_User->getLogin($_POST);
			$data['PageTitle']="Login";
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view('frontend/login',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/login", $data);
            }
            else
            {
				$this->load->view('frontend/login',$data);
            }
	
		}
		else
		{
			$data['PageTitle']="Login";
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view('frontend/login',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/login", $data);
            }
            else
            {
				$this->load->view('frontend/login',$data);
            }
		}
	}
	public function register()
	{
		if ($_POST)
		{
			if($this->M_User->RegisterUser($_POST))
			{
				redirect(base_url()."user/register?sucess=1");
			}
			else
			{
				$data['Error']="Username already exists!";
				$data['PageTitle']="Login";
				if ($this->agent->is_mobile('ipad')) {
					$this->load->view('frontend/register',$data);
				}
				elseif ($this->agent->is_mobile())
				{
					  $this->load->view("mobile/register", $data);
				}
				else
				{
					$this->load->view('frontend/register',$data);
				}

			}
			
		}
		else
		{
			$data['PageTitle']="Register";
			if ($this->agent->is_mobile('ipad')) {
					$this->load->view('frontend/register',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/register", $data);
            }
            else
            {
				$this->load->view('frontend/register',$data);
            }
		}
	}
	public function activate($key)
	{
		$data['Error']= $this->M_User->Activate($key);
		$data['PageTitle']="Login";
			if ($this->agent->is_mobile('ipad')) {
					$this->load->view('frontend/login',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/login", $data);
            }
            else
            {
				$this->load->view('frontend/login',$data);
            }
	}
	public function Update()
	{
		if ($_POST)
		{
			$this->M_User->Update($_POST);
			redirect(base_url()."user/dashboard");
		}
		else
		{
			redirect(base_url()."user/dashboard");
		}
	}
	public function resetPassword()
	{
		if ($_POST)
		{
			if($this->M_User->ResetPassword($_POST))
			{
				$data['Error']= "New Password Sent to your Email";
				$data['PageTitle']="Reset Your Password";
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('frontend/resetpassword',$data);
					}
					elseif ($this->agent->is_mobile())
					{
						  $this->load->view("mobile/resetpassword", $data);
					}
					else
					{
						$this->load->view('frontend/resetpassword',$data);
					}

			}
			else
			{
					$data['Error']="Please Enter Correct Email";
					$data['PageTitle']="Reset Your Password";
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('frontend/resetpassword',$data);
					}
					elseif ($this->agent->is_mobile())
					{
						  $this->load->view("mobile/resetpassword", $data);
					}
					else
					{
						$this->load->view('frontend/resetpassword',$data);
					}
			}
		}
		
		$data['PageTitle']="Reset Your Password";
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('frontend/resetpassword',$data);
					}
					elseif ($this->agent->is_mobile())
					{
						  $this->load->view("mobile/resetpassword", $data);
					}
					else
					{
						$this->load->view('frontend/resetpassword',$data);
					}
	}
	public function saveArticle()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('article');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idSave' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
			   'type' =>1
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,1);
			$this->db->where('idSave' ,$page);
				$Query = $this->db->get();
	
			if ($Query->num_rows > 0){
				echo json_encode( array('id'=>1, 'message'=>'This Article is Already Saved'));
			}
			else if($this->db->insert('user_saved',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'Article Saved Sucessfully'));
			}
		}
	}
	
	public function followTopic()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('categ');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idCat' => $page,
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_follow_topic');
			$this->db->where('idUser' ,$uid);
			$this->db->where('idCat' ,$page);
				$Query = $this->db->get();
	
			if ($Query->num_rows > 0){
				echo json_encode( array('id'=>1, 'message'=>'Already Followed'));
			}
			else if($this->db->insert('user_follow_topic',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'Follwed Sucessfully'));
			}
		}
	}
	
	public function chkfollowTopic()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('categ');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idCat' => $page,
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_follow_topic');
			$this->db->where('idUser' ,$uid);
			$this->db->where('idCat' ,$page);
			$Query = $this->db->get();
	
			if ($Query->num_rows > 0){
				echo json_encode( array('id'=>1, 'message'=>'Already Followed'));
			}
			else
			{
				echo json_encode( array('id'=>0, 'message'=>'Not Follwed'));
			}
		}
	}	
	
	public function followEve()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('Event');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idEvent' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('event_follow');
			$this->db->where('idUser' ,$uid);
			$this->db->where('idEvent' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				echo json_encode( array('id'=>1, 'message'=>'You Allready followed this Event'));
			}
			else if($this->db->insert('event_follow',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'You have followed this Event Sucessfully'));
			}
		}
	}
	public function unsaveArticle()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('article');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idSave' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
			   'type' =>1
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,1);
			$this->db->where('idSave' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				$rs=$Query->result();
				$this->db->delete("user_saved", array("idSaved"=>$rs[0]->idSaved));
				echo json_encode( array('id'=>1, 'message'=>'Removed Sucessfully'));
			}
		}
	}
	
	public function unfollowTopic()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('categ');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idFollow' => $page,
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_follow_topic');
			$this->db->where('idUser' ,$uid);
			$this->db->where('idCat' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				$rs=$Query->result();
				$this->db->delete("user_follow_topic", array("idFollow"=>$rs[0]->idFollow));
				echo json_encode( array('id'=>1, 'message'=>'Removed Sucessfully'));
			}
		}
	}
	
	
	
	public function saveRecipe()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('recipe');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idSave' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
			   'type' =>2
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,2);
			$this->db->where('idSave' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				echo json_encode( array('id'=>1, 'message'=>'This Recipe Already Saved'));
			}
			else if($this->db->insert('user_saved',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'Recipe Saved Sucessfully'));
			}
		}
	}
	public function unsaveRecipe()
	{
		
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('recipe');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idSave' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
			   'type' =>2
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,2);
			$this->db->where('idSave' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				$rs=$Query->result();
				$this->db->delete("user_saved", array("idSaved"=>$rs[0]->idSaved));
				echo json_encode( array('id'=>1, 'message'=>'Removed Successfully'));
			}
		}
	}
	public function SaveProduct()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('product');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
			   'idSave' => $page,
			   'savedon' =>date("Y-m-d H:i:s"),
			   'type' =>3
				);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,3);
			$this->db->where('idSave' ,$page);
			$Query = $this->db->get();
			if ($Query->num_rows > 0)
			{
				echo json_encode( array('id'=>1, 'message'=>'This Product Already Saved'));
			}
			else if($this->db->insert('user_saved',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'Product Saved Sucessfully'));
			}
		}
	}
	public function MysaveArticle($uid)
	{
		$this->db->select('*');
		$this->db->from('user_saved');
		$this->db->where('idUser' ,$uid);
		$this->db->where('type' ,1);
		
		$Query = $this->db->get();
		
		if ($Query->num_rows > 0)
		{
			return $Query->result();
			/*$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
			$result['Article']=$Query->result();
		
			$this->load->view('user/article',$result);*/
		}
		else
		{
			return false;
			/*$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
			
			$this->load->view('user/article',$result);*/
		}
	}
	public function MysaveRecipe()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('article');
		//$this->db->limit(1);
		$this->db->select('*');
		$this->db->from('user_saved');
		$this->db->where('idUser' ,$uid);
		$this->db->where('type' ,2);
		
		$Query = $this->db->get();
		
		if ($Query->num_rows > 0)
		{
			$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
			$result['Article']=$Query->result();
			$this->load->view('user/recipe',$result);

			
		}
		else
		{
			$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
		
			$this->load->view('user/recipe',$result);
		}
	}
	public function MysaveRestaurant()
	{
		$uid=$this->session->userdata('User_id');
	
		$this->db->select('*');
		$this->db->from('user_saved');
		$this->db->where('idUser' ,$uid);
		$this->db->where('type' ,4);
	
		$Query = $this->db->get();
	
		if ($Query->num_rows > 0)
		{
			$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
			$result['Article']=$Query->result();
			
			$this->load->view('user/restaurant',$result);
		}
		else
		{
			$result['User']=$this->M_User->getUserInfo($uid);
			$result['PageTitle']="User Profile";
			
			$this->load->view('user/restaurant',$result);
		}
	}
	public function show_cal_ajax()
	{
		$yr= $this->input->post('year');
		$mth= $this->input->post('month');
		$this->load->library('calendar'); 
		
		$year = $month = "";
		if($yr != NULL && $mth != NULL)
		{
			$month = $mth;
			$year = $yr;
		}
		else
		{
			$month = date('m');
			$year = date('Y');
		}
		$numEvent = $this->M_Events->getDateEvent($year,$month);
		$data = array(
					'cal_data' => $this->calendar->generate($year, $month,$numEvent )
				);
		echo json_encode( array('id'=>1, 'data'=>$data['cal_data']));
	}
	public function show_detail_eve()
	{
		$edate= $this->input->post('edate');
		$this->load->library('calendar'); 
		
		$ddte= $this->M_Events->getDateid($edate);
		
		$this->db->select('*');
		$this->db->from('event_detail');
		$this->db->where("event_date",$ddte);
		$Query = $this->db->get(); 
		if ($Query->num_rows > 0)
		{
			$events= $Query->result();
		}
		foreach($events as $ev):
		?>
			<div class="events-list">
				<i class="fa fa-circle" aria-hidden="true"></i>
				<a href="javascript:void(0);" onclick="ShowEvent(<?php echo $ev->idevent; ?>)">
					<?php echo $ev->event_title; ?>
				</a>
			</div>
		<?php
		endforeach;
	}
	public function show_date_eve()
	{
		$event= $this->input->post('event');
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where("id", $event);
		$Query = $this->db->get(); 
		if ($Query->num_rows > 0)
		{
			$rs= $Query->result();
			$edate=$rs[0]->event_date;
			$this->db->select('*');
			$this->db->from('event_detail');
			$this->db->where("event_date",$edate);
			$Query = $this->db->get(); 
			if ($Query->num_rows > 0)
			{
				$events= $Query->result();
			}
			foreach($events as $ev):
			?>
		
				<div class="events-list">
					<i class="fa fa-circle" aria-hidden="true"></i>
					<a href="javascript:void(0);" onclick="ShowEvent(<?php echo $ev->idevent; ?>)">
						<?php echo $ev->event_title; ?>
					</a>
				</div>
			<?php
				endforeach;
		}
		$events =NULL;
	}
	public function rateRestaurant()
	{
		$user_id=$this->session->userdata('User_id');
		$idRestaurant= $this->input->post('rest');
		$rate= $this->input->post('rate');
		$Comment = $this->input->post('comment');



		if(!$user_id)
		{
			echo 0;//json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'user_id'=>$user_id,
			   'idRestaurant' => $idRestaurant,
			   'rate' => $rate,
			   'Comment' => $Comment
			);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('rest_rating');
			$this->db->where('user_id' ,$user_id);
			$this->db->where('idRestaurant' ,$idRestaurant);
			$Query = $this->db->get();
	
			if ($Query->num_rows > 0)
			{
				echo 1;//json_encode( array('id'=>1, 'message'=>'You Have Allready Rated'));
			}
			else if($this->db->insert('rest_rating',$data))
			{
				echo 2;//json_encode( array('id'=>2, 'message'=>'Thankyou for Rating'));
			}
		}
	}
	public function DelComment()
	{
		$user_id=$this->session->userdata('User_id');
		$rate= $this->input->post('cmtid');
		if(!$user_id)
		{
			json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'user_id'=>$user_id,
			   'id' => $rate,
			);

				$this->db->delete("rest_rating", array("id"=>$rate));
				echo json_encode( array('id'=>1, 'message'=>'Removed Successfully'));
		}
	}



	public function SaveRestaurant()
	{
		$uid=$this->session->userdata('User_id');
		$page= $this->input->post('product');
		if(!$uid)
		{
			echo json_encode( array('id'=>0, 'message'=>'Login First'));
		}
		else
		{
			$data = array(
				'idUser'=>$uid,
				'idSave' => $page,
				'savedon' =>date("Y-m-d H:i:s"),
				'type' =>4
			);
			$this->db->limit(1);
			$this->db->select('*');
			$this->db->from('user_saved');
			$this->db->where('idUser' ,$uid);
			$this->db->where('type' ,4);
			$this->db->where('idSave' ,$page);
			$Query = $this->db->get();
	
			if ($Query->num_rows > 0)
			{
				echo json_encode( array('id'=>1, 'message'=>'This Restaurant Already Saved'));
			}
			else if($this->db->insert('user_saved',$data))
			{
				echo json_encode( array('id'=>1, 'message'=>'Restaurant Saved Sucessfully'));
			}
		}
	}
	public function readNotf()
	{
		$id= $this->input->post('notf');
		
		$sql = "Update `user_notify` set not_status=1 WHERE `id_not`=".$id." and not_status=0";

		$Query = $this->db->query($sql); 
	}
	
	public function editProfile($uid)
	{
		$uid=$this->session->userdata('User_id');
		$data['User']=$this->M_User->getUserInfo($uid);
		$data['PageTitle']="User Profile";
		$data['Restros'] = $this->M_Restaurant->getReviewsByUser($uid);
		$data['followers'] = $this->M_User->getFollowersbyID($uid);
		$data['following'] = $this->M_User->getFollowingbyId($uid);
		
			if ($this->agent->is_mobile('ipad')) {
				$this->load->view("user/profileEdit",$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/profileEdit",$data);
            }
            else
            {
				$this->load->view("user/profileEdit",$data);
            }
	}
	
	
}