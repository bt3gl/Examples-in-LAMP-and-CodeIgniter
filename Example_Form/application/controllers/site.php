<?php

class Site extends CI_Controller{
	
	function _construct(){
		parent::CI_Controller();
		$this->is_logged_in();
	}
	
	function  members_area(){
		$this->load->view('members_area');
	}
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in !=true){
			echo "You don't have permission to access this page. <a href='../login'>Login</a>";
		}
	}
}