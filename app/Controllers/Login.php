<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Login extends Controller
{
	public function index()
	{
        $data = array();
        $data['title'] = "login";
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer', $data);
	}

}