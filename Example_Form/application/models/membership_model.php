<?php

class Membership_model extends CI_Model{
	function validate(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('members');
		
		if($query->num_rows == 1){
			return true;
		}
	}
	
	function create_member(){
		$new_member_insert_data=array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'e-mail' => $this->input->post('e-mail'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('members', $new_member_insert_data);
		return $insert;
	}
}