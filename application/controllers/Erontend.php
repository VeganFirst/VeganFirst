<?php
class Frontend extends CI_Controller {

        public function view($page = 'home')
        {
			$this->load->view('frontend/home');
        }
}