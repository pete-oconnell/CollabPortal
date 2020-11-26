<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Products_model;

class Dashboard extends BaseController
{
    
	public function index()
	{
        $data['slug'] = array();
        array_push($data['slug'], "Dashboard");
        $session = \Config\Services::session($config);
        $data['user'] = $session->get('user');
        if (!isset($data['user'][0]->fullname))
        {
            return redirect()->to('/ci');
        }
        //$data = array();
        //$data['title'] = "login";
        $model = new Products_model();
        $data['products'] = $model->get_products();
        echo view('template/header', $data);
        echo view('dashboard', $data);
        echo view('template/footer', $data);

        //echo "Hello dashboard";
        
        //var_dump($user);
        //if (isset(['fullname'])) { echo "Welcome ".$_SESSION['user']['fullname'];}
        }
        
        

}