<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Send_Request extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this -> load -> library('form_validation');
        $this->load->library('session');
        
    }


        
        // Load file model
         //request_model as request
    public function index()
    {
        $this->load->view('request_form');
    }
    

    public function document_upload(){
            /*Form validation Start*/
            $this->form_validation->set_rules('doc_title', 'Title', 'required', array('required' => 'Document title is required'));
            $this->form_validation->set_rules('doc_type', 'Type', 'required',array('required' => 'Please mention the type of document'));
            $this->form_validation->set_rules('doc_description', 'Description', 'required',array('required' => 'Please provide document description'));
            //$this->form_validation->set_rules('userfile[]', 'Files', 'required',array('required' => 'No document selected'));
            /* Form validation end*/

        if ($this->form_validation->run() == FALSE){
                $this->session->set_flashdata('message', 'File not uploaded');
                $sdata['div_class'] = 'class="alert alert-danger"';
                $sdata['button'] = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                $this->session->set_userdata($sdata);

                redirect('upload');
              
                }

            else {

              $this->load->model('request_model','request');
              $files = $_FILES;
              $count = count($_FILES['userfile']['name']);
              for($i=0; $i<$count; $i++)
                {
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];
                $config['upload_path'] = './uploaded_files/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['max_size'] = '2000000';
                $config['remove_spaces'] = true;
                $config['overwrite'] = false;
                $config['max_width'] = '';
                $config['max_height'] = '';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $this->upload->do_upload();
                $fileName = $_FILES['userfile']['name'];
                $images[] = $fileName;
                }
                  $fileName = implode(',',$images);
                  $this->request->upload_image($this->input->post(),$fileName);

                if ($this->upload->do_upload()){
                    $this->session->set_flashdata('message', 'File uploaded sucessfully');
                    $sdata['div_class'] = 'class="alert alert-danger"';
                    $sdata['button'] = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                    $this->session->set_userdata($sdata);

                    redirect('upload');
              
                  }
                }
            }

}