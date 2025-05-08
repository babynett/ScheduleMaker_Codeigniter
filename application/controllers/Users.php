<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
	}

	public function index(){
		$data['users'] = $this->users_model->getAllUsers();
		$this->load->view('user_list.php', $data);
	}

	public function addnew(){
		$this->load->view('addform.php');
	}

	public function insert(){
		$user['course'] = $this->input->post('course');
		$user['section'] = $this->input->post('section');
		$user['subject'] = $this->input->post('subject');
		$user['day'] = $this->input->post('day');
		$user['i_time'] = $this->input->post('i_time');
		$user['o_time'] = $this->input->post('o_time');
		
		$query = $this->users_model->insertuser($user);

		if($query){
			header('location:'.base_url('save').$this->index());
		}

	}

	public function edit($id){
		$data['user'] = $this->users_model->getUser($id);
		$this->load->view('editform', $data);
	}

	public function update($id){
		$user['course'] = $this->input->post('course');
		$user['section'] = $this->input->post('section');
		$user['subject'] = $this->input->post('subject');
		$user['day'] = $this->input->post('day');
		$user['i_time'] = $this->input->post('i_time');
		$user['o_time'] = $this->input->post('o_time');

		$query = $this->users_model->updateuser($user, $id);

		if($query){
			header('location:'.base_url('save').$this->index());
		}
	}

	public function delete($id){
		$query = $this->users_model->deleteuser($id);

		if($query){
			header('location:'.base_url('save').$this->index());
		}
	}
}


?>