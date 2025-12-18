<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    public function getData(){
        return $this->db->table('personen')->select('*')->get()->getResultArray();
    }
}