<?php

namespace App\Controllers;

use App\Models\ApplicantsModel;


class Applicants extends BaseController
{
    protected $ApplicantsModel;

    public function __construct()
    {
        $this->ApplicantsModel = new ApplicantsModel();
    }

    public function index()
    {

        $data = ['applicants' => $this->ApplicantsModel->get_applicants()];

        echo view('templates/header');
        echo view('applicants', $data);
        echo view('templates/footer');
    }
}
