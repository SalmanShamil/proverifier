<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doc_manager extends CI_Controller {

	public function ViewData()
	{
		$this->load->model('doc_up_model');
		$id = $this->session->userdata('user_id');
		$data['document_list'] = $this->doc_up_model->get_doc($id);
		
		//$this->load->view('test_view', $data);
		$this->load->view('include/head.php');
		$this->load->view('user_dashboard/header_navbar.php');
		$this->load->view('user_dashboard/sidebar_menu.php');
		$this->load->view('doc_view_table', $data);
		$this->load->view('include/footer.php');
		
	
	}

	public function delete_doc($doc_id){
		 if ($doc_id != '') {
            $this->db->where('doc_id', $doc_id);
            $result = $this->db->delete('document_data');
            if ($result) {
                $this->session->set_flashdata('message', 'Document deleted');
            } else {
                $this->session->set_flashdata('message', "An error occurred");
            }
            redirect('Doc_manager/viewdata');
        }

	}


	public function req_form($doc_id,$filename){
		$data['doc_id'] = $doc_id;
		$data['filename'] = $filename;
		$this->load->view('include/head.php');
		$this->load->view('user_dashboard/header_navbar.php');
		$this->load->view('user_dashboard/sidebar_menu.php');
		$this->load->view('user_dashboard/request_form',$data);
		$this->load->view('include/footer.php');

		}

	public function v_request(){
		$verifier_id = $this->input->post('vrf_id', TRUE);
		$document_id = $this->input->post('doc_id', TRUE);
		$filename = $this->input->post('filename', TRUE);

		$this->load->model('request_model');
		$this->request_model->check_verifier($verifier_id);
		

		if($this->request_model->check_verifier($verifier_id)){
			$data['doc_id'] = $document_id;
			$data['verifier_id'] = $verifier_id;
			$data['request'] = 0;
			$this->load->model('request_model');
			$this->request_model->insert_req_data($data);
			
			redirect('doc_manager/viewdata');
		}
		else{
			
			$data['doc_id'] = $document_id;
			$data['filename'] = $filename;
			$data['message'] = "Verifier does not exist";

			$this->load->view('include/head.php');
			$this->load->view('user_dashboard/header_navbar.php');
			$this->load->view('user_dashboard/sidebar_menu.php');
			$this->load->view('user_dashboard/request_form',$data);
			$this->load->view('include/footer.php');
		}
	}

}
