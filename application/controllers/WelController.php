<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelController extends CI_Controller
{
    public function wel_func()
    {
        $this->load->view('welcome_page');
    }

    
}