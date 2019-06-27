<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function check_verifier($verifier_id){
      $verifier = $this->db->get_where('users', array('user_id' => $verifier_id, 'user_type' => 1));
     return $verifier->result();
    }
    
    public function insert_req_data($data){
    $insert_data['doc_id'] = $data['doc_id'];
    $insert_data['verifier_id'] = $data['verifier_id'];
    $insert_data['verification_status'] = 0;

    $query = $this->db->insert('verification_request', $insert_data);

    }
}