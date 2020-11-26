<?php namespace App\Models;

use CodeIgniter\Model;

class Categories_model extends Model
{
    protected $table = "Category";

    public function get_categories()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT name FROM category WHERE published = 1");
        $results = $query->getResult();
        
        return $results;
    }
}