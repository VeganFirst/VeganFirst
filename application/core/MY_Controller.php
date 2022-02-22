<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    public $M_User;
    public $DataArray;
    public $idUser;

    public function __construct() {
        parent::__construct();
        
        $this->load->model("M_User");
        $this->M_User = new M_User();
        
        if (!$this->M_User->isUserLogin()){
            //redirect(base_url()."login");
        }else{
            $this->idUser = $this->M_User->isUserLogin();
            $UserInfo = $this->M_User->getUserInfo($this->idUser);
            $this->DataArray['name'] = $UserInfo->name;
            $this->DataArray['email'] = $UserInfo->email;
            $this->DataArray['facebookUID'] = $UserInfo->facebookUID;
        }
    }
}

class Writer_Controller extends CI_Controller {
    
    public $M_Writer;
    public $DataArray;
    public $idWriter;

    public function __construct() {
        parent::__construct();
        
        $this->load->model("M_Writer");
        $this->M_Writer = new M_Writer();
        
        if ($this->M_Writer->isWriterLogin()){
            $this->id = $this->M_Writer->isWriterLogin();
            $WriterInfo = $this->M_Writer->getWriterInfo($this->id);
            $this->DataArray['vendorFirstName'] = $WriterInfo->FirstName;
            $this->DataArray['vendorLastName'] = $WriterInfo->LastName;
            $this->DataArray['vendorEmail'] = $WriterInfo->Email;
        }
    }
    
    public function PrintArray($Array){
        echo "<pre>";
            print_r($Array);
        echo "</pre>";
    }
    
}