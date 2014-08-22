<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todo_app extends CI_Controller {

    public function index()
    {
        $this->load->view('welcome_todo_app');
    }
    public function add_item()
    {
        $this->load->view('add_item');
    }
    public function delete_item()
    {
        $this->load->view('delete_item');
    }
    public function view_items()
    {
 
        $this->load->model('todo_model');
        $results = $this->todo_model->get_all_entries();
        $data['item'] = $result;
        $this->load->view('view_items', $data);     
        
        /*$data['tasks'] =  $this->todo_model->get_all_entries(10); 
        $this->load->view('view_items', $data);   */ 


    }
    public function view_completed_items()
    {
        $this->load->model('todo_model');
        $task = $this->todo_model->view_completed_items();
        $data['task'] = $task['task'];
        $this->load->view('view_completed_items', $data);    
        
    }
}
