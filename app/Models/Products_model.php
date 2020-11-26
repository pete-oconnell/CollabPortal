<?php namespace App\Models;

use CodeIgniter\Model;

class Products_model extends Model
{
    public function get_products()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT name FROM product WHERE published = 1");
        $results = $query->getResult();
        
        return $results;
    }

    public function get_sections($product)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT s.name FROM section s INNER JOIN product p on p.id = s.product_id WHERE s.published = 1 and p.name = '".esc($product)."'");
        $results = $query->getResult();
        
        return $results;
    }
}