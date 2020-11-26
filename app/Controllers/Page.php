<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Page extends Controller
{
	public function index()
	{
        /**$data = array();
        $data['title'] = "login";
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer', $data);**/

        echo "Hello product";
        }
        
        public function getPageContent($page)
        {
                echo "Hello page ".$page;
        }

        public function editPageContent($page)
        {
                echo "Edit page ".$page;
        }

}