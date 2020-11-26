<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Section extends BaseController
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
        
        public function getSectionPages($product, $section)
        {
            $data['slug'] = array();
            array_push($data['slug'], "Dashboard", $product, $section);
            $section = str_replace("-", " ", $section);
            $product = str_replace("-", " ", $product);
            $session = \Config\Services::session($config);
            $data['user'] = $session->get('user');
            if (!isset($data['user'][0]->fullname))
            {
                return redirect()->to('/ci');
            }
                $data['section'] = $section;
                $data['product'] = $product;
                echo view('template/header', $data);
                echo view('section', $data);
                echo view('template/footer', $data);
        }

        public function addSectionPage($section)
        {
                echo "Add a page to section ".$section;
        }

}