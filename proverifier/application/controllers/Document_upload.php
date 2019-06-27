<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Document_upload extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('doc_up_model');
		$this->load->library('form_validation');

	}

	
	public function doc_data(){
		//validate the form data 

		$this->form_validation->set_rules('doc_title', 'Title', 'required', array('required' => 'Document title is required'));
        $this->form_validation->set_rules('doc_type', 'Type', 'required',array('required' => 'Please mention the type of document'));
        $this->form_validation->set_rules('doc_description', 'Description', 'required',array('required' => 'Please provide document description'));
        if (empty($_FILES['user_file']['name']))
			{
			    $this->form_validation->set_rules('user_file', 'Document', 'required',array('required' => 'Please select a png,jpg or pdf file '));
			}
       
        if ($this->form_validation->run() == FALSE){

                /*$this->session->set_flashdata('message', 'File not uploaded');
                $sdata['div_class'] = 'class="alert alert-danger"';
                $sdata['button'] = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                $this->session->set_userdata($sdata);
                redirect('upload');//Message style */

                $this->load->view('include/head.php');
                $this->load->view('user_dashboard/header_navbar');
                $this->load->view('user_dashboard/sidebar_menu');
                $this->load->view('user_dashboard/upload_form');
                $this->load->view('include/footer');
              
                }

           else{

			$customName = "pqr";
			
			//get the form values
			$data['doc_title'] = $this->input->post('doc_title', TRUE);
			$data['doc_type'] = $this->input->post('doc_type', TRUE);
			$data['doc_description'] = $this->input->post('doc_description', TRUE);

			//file upload code 
			//set file upload settings 
			$config['upload_path']          = APPPATH. '../uploaded_files/';
			$config['allowed_types']        = 'gif|jpg|png|pdf';
			$config['max_size']             = 10000;
			$config['max_filename_increment'] = 1000;
			$config['file_name']        = $customName;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ( ! $this->upload->do_upload('user_file')){
				$error = array('error' => $this->upload->display_errors());
				redirect('upload');
			}else{

				//file is uploaded successfully
				$this->load->helper('date');
				$upload_data = $this->upload->data();

				//get the uploaded file name
				$data['user_file'] = $upload_data['file_name'];
				date_default_timezone_set('Asia/Dhaka');

				$data['upload_time'] = date("Y-m-d H:i:s");
				$data['owner'] = $this->session->userdata('user_id');
				$data['file_type'] = $this->upload->data('file_type');

				//store pic data to the db
				$this->doc_up_model->store_doc_data($data);

				
			}
			$this->session->set_flashdata('message', 'File uploaded successfully');
            $sdata['div_class'] = 'class="alert alert-danger"';
            $sdata['button'] = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                $this->session->set_userdata($sdata);

           redirect('upload');
		}
	}
}
