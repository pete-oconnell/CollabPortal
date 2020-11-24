<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
        $this->load->view('template/header', $data);
        $this->load->view('login', $data);
        $this->load->view('template/footer', $data);
	}

	//--------------------------------------------------------------------

}