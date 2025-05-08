<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bootController extends CI_Controller
{
    public function b_func()
    {
        $this->load->view('application\views\bootstrap');
    }
}