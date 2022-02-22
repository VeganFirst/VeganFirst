<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors", 1);
error_reporting(E_ALL);

header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0"); 

require_once(APPPATH . "/third_party/paytm/config_paytm.php");
require_once(APPPATH . "/third_party/paytm/encdec_paytm.php");



class Magazine extends CI_Controller
{
	 
       

   
 
    public function __construct()
    {		
	        parent::__construct();        
	        			
    }

    public function index()
    {        
	    if ($this->agent->is_mobile('ipad')) {
            $this->load->view('magazine_pages/index');
        } elseif ($this->agent->is_mobile()) {
            $this->load->view("mobile/magazine");
        } else {
            $this->load->view('magazine_pages/index');
        }
    }		
	
			
	
	public function checkout(){	
            if(isset($_POST['submit']) && $_POST['submit'] == 'CHECKOUT'){
			    
				$checkSum = "";
                
                $paramList["MID"] = PAYTM_MERCHANT_MID;
                $paramList["ORDER_ID"] = uniqid();
                $paramList["CUST_ID"] = strtotime(date('h:i:s'));
				$paramList["INDUSTRY_TYPE_ID"] = 'Retail';
				$paramList["CHANNEL_ID"] = 'WEB';
				$paramList["TXN_AMOUNT"] = $_POST['amount'];
				$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
				$paramList["CALLBACK_URL"] = base_url().'response';
				$paramList["MOBILE_NO"] = $_POST['MOBILE_NO'];
				$paramList["EMAIL"] = $_POST['EMAIL'];
				$paramList["MERC_UNQ_REF"] = $_POST['MERC_UNQ_REF'];
			    $checkSum = getChecksumFromArray($paramList,PAYTM_MERCHANT_KEY);
				
				$data['param'] = $paramList;
				echo "<html><head><title>Merchant Check Out Page</title></head><body><center><h1>Please do not refresh this page...</h1></center>
                      <form method='post' action='".PAYTM_TXN_URL."' name='f1'><table border='1'><tbody>";
                      foreach($paramList as $name => $value) {
                      echo '<input type="hidden" name="' . $name .'" value="' . $value .         '">';
                      }
                      echo "<input type='hidden' name='CHECKSUMHASH' value='". $checkSum . "'>
                      </tbody></table><script type='text/javascript'>document.f1.submit(); </script></form></body></html>"; 
                				 
			}else if(isset($_POST['submit']) && $_POST['submit'] == 'Subscribed'){
				$prod = $this->input->post('product');
				if($prod == 'single'){
					$amount = 150;
				}else{
					$amount = 550;
				}
				$data['product'] = $prod;
				$data['amount'] = $amount;
				$this->load->view('magazine_pages/checkout',$data); 
			}else{
				 redirect('magazine');
			}			
	          
	               
	}
	
	public function response(){
		$response = $_POST;
		
		if($response['STATUS'] == 'TXN_SUCCESS'){
			$ORDER_ID = "";
            $requestParamList = array();
            $responseParamList = array();
            $requestParamList = array("MID" => $response['MID'] , "ORDERID" => $response['ORDERID']); 
            $checkSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
            $requestParamList['CHECKSUMHASH'] = urlencode($checkSum);
            $data_string = "JsonData=".json_encode($requestParamList);
            //echo $data_string;
			$ch = curl_init(); // initiate curl
            $url = PAYTM_STATUS_QUERY_NEW_URL;
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, true); // tell curl you want to post something
			curl_setopt($ch, CURLOPT_POSTFIELDS,$data_string); // define what you want to post
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the output in string format
            $headers = array();
            $headers[] = 'Content-Type: application/json';
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            $output = curl_exec($ch); // execute
            $info = curl_getinfo($ch);
            $final = json_decode($output, true);
          
			$data['msg'] = 'Transaction Successful';
			$data['bank_txn'] = $response['BANKTXNID'];
			$data['txn'] = $response['TXNID'];
			$data['status'] = 'TXN_SUCCESS';
		}
		
		if($response['STATUS'] == 'TXN_FAILURE'){
			$data['msg'] = 'Transaction Failed';
			$data['status'] = 'TXN_FAILURE';
		}
		
		$this->load->view('magazine_pages/response',$data); 
	}

}