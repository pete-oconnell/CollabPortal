<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Section extends Controller
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
        
        public function getSectionPages($section)
        {
                echo "Hello section ".$section;
        }

        public function addSectionPage($section)
        {
                echo "Add a page to section ".$section;
        }

}