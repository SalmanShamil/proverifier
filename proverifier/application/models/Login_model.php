<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function user_authentication($username,$password){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_name', $username);
		$this->db->where('password', md5($password));

		$query_result = $this->db->get();
		$result = $query_result->row();
		return $result;

	}
}