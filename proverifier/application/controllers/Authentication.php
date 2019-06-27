<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
	public $login_status;

	public function __construct(){
        parent::__construct();
        $this -> load -> library('form_validation');
    }

	public function index(){	
		$this->load->library('form_validation');
		$this->load->view('login');
	}


	public function login_auth(){
		$this->load->library('form_validation');


		if($this->input->post('login'))
		    {

		    	$username=$this->input->post('username', true);
		    	$password=$this->input->post('password', true);
		    	$this->load->model('Login_model');
		    	$result = $this->Login_model->user_authentication($username,$password);

		    	$sdata = array();

		    	if($result){
		    		
		    		$sdata['user_id'] = $result->user_id;
		    		$sdata['name'] = $result->name;
		    		$sdata['username'] = $result->user_name;
		    		$sdata['email'] = $result->email;
		    		$sdata['user_type'] = $result->user_type;

		    		$this->session->set_userdata($sdata);
		    		redirect('dashboard');
		    	} 
		    	else{

		    		$sdata['message'] = 'Your username or password is incorrect';
		    		$this->session->set_userdata($sdata);
		    		redirect('login'); 
		    	}
		    }
		}

	public function dashboard(){
		$login_status = $this->session->userdata('user_type');

		//Load view according to user type

		if($login_status==1){
			redirect('vprofile');
		}
		elseif($login_status==4){
			redirect('uprofile');
		}
		else{
			redirect('invalid_request');
		}
	}

	public function logout(){

		$this->session->unset_userdata($sdata);
		$this->session->sess_destroy();
		redirect('login'); 
	
	}

	
}