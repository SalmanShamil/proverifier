<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View_load extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this -> load -> library('form_validation');
        $this->load->library('session');

        }

	public function user_profile(){
		$login_status = $this->session->userdata('user_type');
			if($login_status){
				$this->load->view('include/head.php');
                $this->load->view('user_dashboard/header_navbar');
                $this->load->view('user_dashboard/sidebar_menu');
                $this->load->view('user_dashboard/profile');
                $this->load->view('include/footer');
            }else
            {
             redirect('error');
            }

	}

	public function verifier_profile(){
				$this->load->view('include/head.php');
				$this->load->view('verifier_dashboard/header_navbar.php');
				$this->load->view('verifier_dashboard/sidebar_menu.php');
				$this->load->view('verifier_dashboard/profile.php');
				$this->load->view('include/footer.php');
		}

	public function file_upload(){
		$login_status = $this->session->userdata('user_type');
			if($login_status){
				$this->load->view('include/head.php');
                $this->load->view('user_dashboard/header_navbar');
                $this->load->view('user_dashboard/sidebar_menu');
                $this->load->view('user_dashboard/upload_form');
                $this->load->view('include/footer');
            }
                else
            {
             redirect('error');
         }

	}

	public function file_upload_validation_error(){
		$login_status = $this->session->userdata('user_type');
			if($login_status){
				$this->load->view('include/head.php');
                $this->load->view('user_dashboard/header_navbar');
                $this->load->view('user_dashboard/sidebar_menu');
                $this->load->view('user_dashboard/upload_form');
                $this->load->view('include/footer');
            }else
            {
             redirect('error');
            }
        }
}