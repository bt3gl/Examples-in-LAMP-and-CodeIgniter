<?php 

/* Here we define all the get methods */


class Todo_model extends CI_Model {
	public function __construct()	{
	  $this->load->database(); 
	}
	/*
	function get_all_entries() {
	  $query = $this->db->order_by('order', 'ASC')->get('todo');
	  return $query->row_array();
	}
	*/

	
	function get_all_entries() {
	  $query = $this->db->order_by('order', 'ASC')->get('todo');
	  $results = array();  
	  foreach ($query->result() as $result) {
	    $results[] = $result;  
	  }
	  return $results;
	}


	function view_completed_items() {
	  $query = $this->db->get_where('todo', array('completed'=>'1'));
	  return $query->row_array();
	}
}