<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Base_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('login')==NULL) redirect('auth/login');
    }
    public function render($view, $data = array())
    {
    	$this->load->view('template/header', $data);
        $this->load->view($view, $data);
        $this->load->view('template/footer', $data);
    }
}