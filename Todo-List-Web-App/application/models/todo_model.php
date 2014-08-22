<?php 


class Todo_model extends CI_Model {
	public function __construct()	{
	  $this->load->database(); 
	}

	function get_all_entries() {
	  $query = $this->db->get('todo');
	  return $query->row_array();
	}



}