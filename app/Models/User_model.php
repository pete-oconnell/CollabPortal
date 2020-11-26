<?php namespace App\Models;

use CodeIgniter\Model;

class User_model extends Model
{
    public function login($email, $password)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT email, fullname, permissions FROM user WHERE email = '".esc($email)."' AND password = '".esc($password)."'");
        $results = $query->getResult();
        
        return $results;
    }
}