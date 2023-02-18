<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model{
    protected $table = 'tbl_category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = ['category_name', 'category_description'];

    public function all_category(){
        return $this->findAll();
    }

    public function addCategory($data)
    {
        $this->insert($data);
    }
}
