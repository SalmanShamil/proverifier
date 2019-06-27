<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function registration()
	{	$this->load->library('form_validation');
		$this->load->view('signup');
	}


	public function General_signup() {
		$this->load->library('form_validation'); 
		$this->load->helper('date');
		date_default_timezone_set('Asia/Dhaka');

     if($this->input->post('gsubmit_signup'))
		    {
		    //Form validation part
		    $this->form_validation->set_rules('gusername', 'Username', 'required|is_unique[users.user_name]', array('is_unique' => 'This username is already used'));
        	$this->form_validation->set_rules('gemail', 'Email', 'required|valid_email|is_unique[users.email]',array('is_unique' => 'This email is already used'));
        	$this->form_validation->set_rules('gpassword', 'Password', 'required');
        	$this->form_validation->set_rules('gre_pass', 'Confirm Password', 'required|matches[gpassword]');
        	$this->form_validation->set_message('matches', 'Two password does not match');

		    //get form's data and store in local varable
		    $name=$this->input->post('gname');
		    $username=$this->input->post('gusername');
		    $email=$this->input->post('gemail');
		    $password=$this->input->post('gpassword');
		 
		  $data = array(
		   'name' => $name,
		   'user_name' => $username,
		   'email' => $email,
		   'password' => md5($password),
		   'user_type' => '4',
		   'signup_date' => date("Y-m-d H:i:s")
		);

	if ($this->form_validation->run()) {
			$this->db->insert('users', $data);
			echo "Saved sucessfully";
			}

	else {
		   $this->load->view('signup', $data);

		 	}
		
		}
	}

		public function Verifier_signup() {

			$this->load->helper('date');
			$this->load->library('form_validation');
			date_default_timezone_set('Asia/Dhaka');


     if($this->input->post('vsubmit_signup'))
		    {
		    $this->form_validation->set_rules('vusername', 'Username', 'required|is_unique[users.user_name]', array('is_unique' => 'This username is already used'));
        	$this->form_validation->set_rules('vemail', 'Email', 'required|valid_email|is_unique[users.email]',array('is_unique' => 'This email is already used'));
        	$this->form_validation->set_rules('vpassword', 'Password', 'required');
        	$this->form_validation->set_rules('vre_pass', 'Confirm Password', 'required|matches[vpassword]');
        	$this->form_validation->set_message('matches', 'Two password does not match');

		    //get form's data and store in local varable
		    $name=$this->input->post('vname');
		    $username=$this->input->post('vusername');
		    $email=$this->input->post('vemail');
		    $password=$this->input->post('vpassword');
		 
		  $data = array(
		   'name' => $name,
		   'user_name' => $username,
		   'email' => $email,
		   'password' => md5($password),
		   'user_type' => '1',
		   'signup_date' => date("Y-m-d H:i:s")
		);

	if ($this->form_validation->run()) {
			$this->db->insert('users', $data);
			echo "Saved sucessfully";
			}

	else {
		    $this->load->view('signup', $data);
		 	}
		 }
	}
}