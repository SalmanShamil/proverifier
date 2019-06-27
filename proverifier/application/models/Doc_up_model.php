<?php 

class Doc_up_model extends CI_Model{
	
	/*fetch data from db
	function get_doc(){
		$user_doc = $this->db->get('document_data');
		return $user_doc->result();
	}*/

	function get_doc($id){
		$user_doc = $this->db->get_where('document_data', array('doc_owner' => $id));
		return $user_doc->result();
	}

	//save picture data to db
	function store_doc_data($data){
		//$insert_data['database_field'] = data['data_array_value from controller'];

		$insert_data['doc_owner'] = $data['owner'];
		$insert_data['doc_title'] = $data['doc_title'];
		$insert_data['doc_type'] = $data['doc_type'];
		$insert_data['doc_description'] = $data['doc_description'];
		$insert_data['filename'] = $data['user_file'];
		$insert_data['uploaded_on'] = $data['upload_time'];
		$insert_data['file_type'] = $data['file_type'];


		//insert('database table name','array')
		$query = $this->db->insert('document_data', $insert_data);
	}
	
}