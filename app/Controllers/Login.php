<?php namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\User_model;

class Login extends BaseController
{
	public function index()
	{
                $session = \Config\Services::session($config);
                $model = new User_model();
		if ($this->request->getMethod() === 'post' && $this->validate(['email' => 'required|valid_email','password'  => 'required']))
                {
                        $data['user'] = $model->login(esc($this->request->getPost('email')), esc($this->request->getPost('password')));
                        $session->set('user', $data['user']);
                        return redirect()->to('Dashboard');
                }
                else
                {
                        echo view('template/header');
                        echo view('home');
		        echo view('template/footer');
                }
	}

}