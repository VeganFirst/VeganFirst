<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Pages extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    

    public function getPage($page){
        $Query = $this->SelectAllWhere("page", array("Url"=>$page));
        
        if ($Query->num_rows() > 0){
				$sql="UPDATE page SET Views = Views + 1 WHERE Url = '".$page."'";
				$this->db->query($sql);

			
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	public function AddPage($Array){
        $Url = $Array['Url'];
         
        $Arrayw['PageTitle']=$Array['PageTitle'];
		$Arrayw['Url']=$Array['Url'];
		
		$Arrayw['MetaTitle']=$Array['MetaTitle'];
		$Arrayw['MetaKeyword']=$Array['MetaKeyword'];
		$Arrayw['MetaDescription']=$Array['MetaDescription'];
		$Arrayw['Page_desc']=$Array['Page_desc'];
        if ($this->isUrlExists($Url)){
            
			$Arrayw['Url']=$Arrayw['Url'].'-1';
        }else{
            
        }
		
		if($this->Insert("page", $Arrayw))
			{
            return "You have successfully Added ".$Arrayw['PageTitle']." Page.";
			
			}
    }
	
	
	

	 public function getAllPages(){
        $Query = $this->SelectAll('page');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	public function getPageInfo($idPage){
        $Query = $this->SelectAllWhere("page", array("id"=>$idPage));
        if ($Query->num_rows() > 0){
			$Result = $Query->result();
            return $Result[0];
        }
    }
	public function updatePage($idPage, $Array){
        $this->UpdateAll("page", $Array, array("id"=>$idPage));
    }
	
	public function deletePage($idArticle){
        $this->Delete("page", array("id"=>$idArticle));
        
    }
	public function isUrlExists($Url){
        $Query = $this->SelectAllWhere("page", array("Url"=>$Url));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
	
	public function sendContact($Array)
	{
		
		$message ="<p>".$Array['Name']." Submit the Contact Form</p><br/><p>Name : ".$Array['Name']."</p><p>Email : ".$Array['Email']."</p><p>Message : ".$Array['message']."</p>";
				if($this->SendMail(CONTACT_US_EMAIL,$Array['Subject'],$message,$Array['Email'],$Array['Name']))
				{
				return "Thank You for writing to us! <br/>Have a great day!";
				}
	}
	
	public function sendAttend($Array)
	{
		
		$message ="<p>".$Array['name']." is attending Event ".$Array['eventsx']."</p><br/><p>Name : ".$Array['name']."</p><p>Email : ".$Array['email']."</p><p>Contact : ".$Array['contact']."</p><p>Age : ".$Array['age']."</p><p>City : ".$Array['city']."</p><p>Website : ".$Array['website']."</p><p>Is vegan : ".$Array['isvegan']."</p><p>Occupation : ".$Array['occupation']."</p>Interset : ".$Array['interest']."</p></p>Health : ".$Array['health']."</p>";
		$subject=$Array['name']." is attending Event ".$Array['eventsx'];
				if($this->SendMail(CONTACT_US_EMAIL,$subject,$message,$Array['email'],$Array['name']))
				{
				return "Thank You for your interest! <br/>Have a great day!";
				}
	}

	
	public function sendPartner($Array)
	{
		
		$subject="Partner with us Form";
		$message ="<p>".$Array['Name']." Submit the Form</p><br/><p>Name : ".$Array['Name']."</p><p>Email : ".$Array['Email']."</p><p>Company : ".$Array['Company']."</p><p>Phone No : ".$Array['Phone']."</p><p>Message : ".$Array['message']."</p>";
		
		
				if($this->SendMail(PARTNER_EMAIL,$subject,$message,$Array['Email'],$Array['Name']))
				{
				return "Thank You for contacting us!<br/>Our Business Development team will respond ASAP!";
				}
	}
	
	public function sendListed($Array)
	{
		
		$subject="Get Listed Form";
		$message ="<p>".$Array['name']." Submit the Form</p><br/><p>Name : ".$Array['name']."</p><p>City : ".$Array['city']."</p><p>Email : ".$Array['email']."</p><p>Phone Number : ".$Array['contact']."</p><p>Company : ".$Array['company']."</p><p>City : ".$Array['city']."</p><p>Address : ".$Array['address']."</p>";
		
		
				if($this->SendMail(PARTNER_EMAIL,$subject,$message,$Array['email'],$Array['name']))
				{
				return "<h4>Thank You for contacting us!<br/>Our Business Development team will respond ASAP!</h4>";
				}
				else{
			return "<h4>Please Try Again</h4>";
}
//return "<h4>Please Try Again</h4>";
	}
	
	public function sendASK($Array)
	{
		$subject="ASK Question to ".$Array['name'];
		$message = "<p>Question to : ".$Array['name']."</p><p>User Email : ".$Array['email']."</p><p>Question : ".$Array['question']."</p>";
		
		if($this->SendMail(CONTACT_US_EMAIL,$subject,$message))
		{
		return "<h4>Thank You for contacting us!<br/>Our Business Development team will respond ASAP!</h4>";
		}
	}
	
	
	public function sendFeedback($Array)
	{
		$subject="Feedback Form";
		$message = "<p>".$Array['name']." with Email ".$Array['email']." has sent an Feedback</p>";
		$message .="<p>What do he/she like about the website</p>";
		$message .="<p style='margin-left:20px'>for content: ".$Array['content']."</p>";
		$message .="<p style='margin-left:20px'>for design: ".$Array['design']."</p>";
		$message .="<p style='margin-left:20px'>for creatives: ".$Array['creatives']."</p>";
		$message .="<p style='margin-left:20px'>for Recipes: ".$Array['recipes']."</p>";
		$message .="<p style='margin-left:20px'>for Restaurant guide: ".$Array['restaurant']."</p>";
		$message .="<p>What would he/she like to see more</p>";
		foreach ($Array['more'] as $more)
		{
			$message .="<p style='margin-left:20px'>".$more."</p>";
		}

		$message .="<p>How helpful is Vegan First in providing solutions (information) to vegan topics/problems?</p>";
		$message .="<p style='margin-left:20px'>Rating: ".$Array['how_helpful']."</p>";
		$message .="<p style='margin-left:20px'>Message: ".$Array['how_helpful_text']."</p>";
		$message .="<p>Where do you read our articles the most?</p>";
		$message .="<p style='margin-left:20px'>".$Array['where_you_know']."</p>";
		if ($Array['where_you_know']=='other')
		{
			$message .="<p style='margin-left:20px'>Source: ".$Array['other']."</p>";
		}
		if($this->SendMail(CONTACT_US_EMAIL,$subject,$message))
		{
			setcookie('feedback',1, time() + (86400 * 30), "/");
			return " for your Feedback<br/>We will try to improve with your suggestions";
		}
	}
        public function sendAdvertise($Array)
	{
		$subject="Advertise Form by ".$Array['Name'];
		$message = "<p>".$Array['Name']." with Email ".$Array['Email']." has sent an Feedback</p>";
		
		$message .="<p>Name: ".$Array['Name']."</p>";
		$message .="<p>Email: ".$Array['Email']."</p>";
                $message .="<p>Company Name: ".$Array['cname']."</p>";
                $message .="<p>Phone: ".$Array['phone']."</p>";
                $message .="<p>Company Website: ".$Array['web']."</p>";
                $message .="<p>Message: ".$Array['message']."</p>";
		

		if($this->SendMail(CONTACT_US_EMAIL,$subject,$message))
		{
			
			return "<h4>Thank You for contacting us!<br/>Our Business Development team will respond ASAP!</h4>";
		}
	}



}