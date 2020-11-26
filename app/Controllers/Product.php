<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Product extends Controller
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
        
        public function getProductSections($product)
        {
                echo "Hello product ".$product;
        }

}