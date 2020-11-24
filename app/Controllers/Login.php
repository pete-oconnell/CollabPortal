<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $this->load->view('template/header', $data);
        $this->load->view('login', $data);
        $this->load->view('template/footer', $data);
	}

	//--------------------------------------------------------------------

}