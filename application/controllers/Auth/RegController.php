<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property FormValidation form_validation Form validation object injected by CodeIgniter
 */

class RegController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->helper('form');

    }

    public function reg_func()
    {
        $this->load->view('register_page');
    }

    public function reg_post_func()
    {
        $this->form_validation->set_rules('stud_num', 'Student Number', 'trim|required|min_length[9]|max_length[9]',
            array(
                'required' => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
            )    
    );
        $this->form_validation->set_rules('email_add', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');
        $this->form_validation->set_rules('conf_pass', 'Confirm password', 'trim|required|matches[pass]');
        if($this->form_validation->run() == FALSE)
        {
            $this->reg_func();
        }
        else{
            $data = array(
                'stud_num' => $this->input->POST('stud_num'),
                'email_add' => $this->input->POST('email_add'),
                'pass' => $this->input->POST('pass')
            );
            $register_user = new UserModel;
            $checking = $register_user->registerUser($data);
            if($checking)
            {
                $this->session->set_flashdata('status',"Registered Successfully!");
                redirect(base_url('login'));
            }
            else{
                $this->session->set_flashdata('status', 'Registered Failed.');
                redirect(base_url('register'));
            }
        }
    }
}
?>