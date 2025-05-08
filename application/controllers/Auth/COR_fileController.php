<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class COR_fileController extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('CorModel');
        $this->load->helper('form');
        $this->load->library('upload');
    }

    public function upfile_func()
    {
        $this->load->view('cor_ins/psched');
    }

    public function upfile_post_func()
    {
        $this->form_validation->set_rules('full-name', 'Full Name', 'trim|required');
        $this->form_validation->set_rules('school_univ', 'School/University', 'trim|required');
        $this->form_validation->set_rules('year-lvl', 'Year Level', 'trim|required');
        $this->form_validation->set_rules('course', 'Course', 'trim|required');
        if($this->form_validation->run()==FALSE)
        {
            $this->upfile_func();
        }
        else{
            $data = array(
                'full-name' => $this->input->post('full-name'),
                'school_univ' => $this->input->post('school_univ'),
                'year-lvl' => $this->input->post('year-lvl'),
                'course' => $this->input->post('course'),
                'cor_file' => $this->input->post('cor_file')
            );
            $cor = new CorModel;
            $res = $cor->insertCor($data);
            if($res)
            {
                $this->session->set_flashdata('status', 'COR Received!');
                redirect(base_url('save')); 
                }
                else{
                    $this->session->set_flashdata('status', 'Invalid File');
                    redirect(base_url('psched')); 
                }
        }
    }
}
