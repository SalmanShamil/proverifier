<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom_error extends CI_Controller {

	public function page_not_found(){	
		$this->load->view('errors/page_not_found');
	}

	public function dashboard_error(){
		$this->load->view('errors/dashboard_error');
	}
}