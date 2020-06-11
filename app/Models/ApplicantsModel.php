<?php

namespace App\Models;

use CodeIgniter\Model;


class ApplicantsModel extends Model
{
    public function get_applicants()
    {
        return $this->db->table('applicants')
            ->join('career', 'career.id=applicants.position')
            ->get()->getResultArray();
    }
}
