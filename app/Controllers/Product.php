<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Products_model;

class Product extends BaseController
{
	public function index()
	{
        /**$data = array();
        $data['title'] = "login";
        echo view('template/header', $data);
        echo view('login', $data);
        echo view('template/footer', $data);**/

        //echo "Hello product";
        }
        
        public function getProductSections($product)
        {
                $data['slug'] = array();
                array_push($data['slug'], "Dashboard", $product);
                $product = str_replace("-", " ", $product);
                $session = \Config\Services::session($config);
                $data['user'] = $session->get('user');
                if (!isset($data['user'][0]->fullname))
                {
                        return redirect()->to('/ci');
                }
                $data['product'] = $product;
                $model = new Products_model();
                $data['sections'] = $model->get_sections($product);
                echo view('template/header', $data);
                echo view('product', $data);
                echo view('template/footer');
        }

}