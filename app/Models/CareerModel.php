<?php

namespace App\Models;

use CodeIgniter\Model;


class CareerModel extends Model
{
  protected $table = 'career';

  // public function insert_career($data)
  // {
  //   $query = $this->db->table($this->table)->insert($data);
  //   return $query;
  // }
  protected $primaryKey = 'id';
  protected $allowedFields = ['title', 'location', 'description'];
}
