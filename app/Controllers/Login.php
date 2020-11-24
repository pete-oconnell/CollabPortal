<?php namespace App\Controllers;

class Login extends CI_Controller
{
	public function index()
	{
        $this->load->view('template/header', $data);
        $this->load->view('login', $data);
        $this->load->view('template/footer', $data);
	}

	//--------------------------------------------------------------------

}