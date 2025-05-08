<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->load->helper('form');

    }

    public function log_func()
    {
        $this->load->view('login_page');
    }

    public function log_post_func()
    {
        $this->form_validation->set_rules('n_stud', 'Student Number', 'trim|required|min_length[9]|max_length[9]',
        array(
            'required' => 'You have not provided %s.',
            'is_unique'     => 'This %s already exists.'
        )
    );
        $this->form_validation->set_rules('lpass', 'Password', 'trim|required');
        if($this->form_validation->run()==FALSE)
        {
            return $this->log_func();
        }
        else{
            $data = [
                'stud_num' => $this->input->post('n_stud'),
                'pass' => $this->input->post('lpass')
            ];
            $user = new UserModel;
            $result = $user->loginUser($data); 
            if($result != FALSE)
            {
                echo
                $auth_userdetails = [
                    'stud_num' => $result->stud_num,
                    'pass' => $result->pass,
                ];

                $this->session->set_userdata('authenticated', '1');
                $this->session->set_userdata('auth_user', $auth_userdetails);
                $this->session->set_userdata('status', 'Login Successful');
                redirect(base_url('psched'));
            }
            else{
                $this->session->set_flashdata('status', 'Invalid Email or Password');
                redirect(base_url('login')); 
            }
        }
    }
}
?>