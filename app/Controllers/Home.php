<?php namespace App\Controllers;

use App\Models\User_model;
use CodeIgniter\Controller;

class Home extends Controller
{
	public function __construct()
	{
		//parent::__construct();;
		
	}

	public function index()
	{
		$data = array();
		//$data['title'] = "";

		//$data['update'] = "This is an example of a welcome message on the site, it can also be used to provide details on updates.";
		
		//$data['categories'] = $model->get_categories();

		

        echo view('template/header', $data);
        echo view('home', $data);
		echo view('template/footer', $data);
		
	}
}
