<?php

namespace App\Controllers;

use App\Models\CareerModel;


class Career extends BaseController
{

    public function index()
    {
        // $data = [];
        // helper(['form']);

        // if($this->request->getMethod() == 'post'){
        //     $model = new CareerModel();

        //     $data = [
        //         'title' => $this->request->getVar('title'),
        //         'description' => $this->request->getVar('description'),
        //     ];

        //     $model->save($data);
        //     $session->setFlashData('success', 'Successfull insert career');
        //     return redirect()->to();
        // }
        $careerModel = new CareerModel();
        $data['careers'] = $careerModel->findAll();
        echo view('templates/header');
        echo view('career', $data);
        echo view('templates/footer');
    }

    public function insertCareerForm()
    {
        echo view('templates/header');
        echo view('insertCareer');
        echo view('templates/footer');
    }

    public function insertCareer()
    {


        $careerModel = new CareerModel();
        $careerModel->insert($_POST);
        // return $this->response->redirect(site_url('http://localhost/ariska-panel/public/career'));
        // $data = array(
        //     'title'  => $this->request->getPost('title'),
        //     'description' => $this->request->getPost('description'),
        // );
        // $model->save($data);
        return redirect()->to('http://localhost/ariska-panel/public/career');

        // // Mengambil value dari form dengan method POST
        // $title = $this->request->getPost('title');
        // $desc = $this->request->getPost('description');

        // // Membuat array collection yang disiapkan untuk insert ke table
        // $data = [
        //     'title' => $title,
        //     'description' => $desc
        // ];
        // /* 
        // Membuat variabel simpan yang isinya merupakan memanggil function 
        // insert_product dan membawa parameter data 
        // */
        // $simpan = $this->careerModel->insert_career($data);

        // // Jika simpan berhasil, maka ...
        // if ($simpan) {
        //     // Deklarasikan session flashdata dengan tipe success
        //     session()->setFlashdata('success', 'Created product successfully');
        //     // Redirect halaman ke product
        //     return redirect()->to(base_url('http://localhost/ariska-panel/public/career'));
        // }
    }

    public function delete($id)
    {
        $careerModel = new CareerModel();
        $careerModel->delete($id);
        return redirect()->to('http://localhost/ariska-panel/public/career');
    }

    public function edit($id)
    {
        $careerModel = new CareerModel();
        $data['career'] = $careerModel->find($id);
        echo view('templates/header');
        echo view('edit', $data);
        echo view('templates/footer');
    }

    public function update()
    {
        $careerModel = new CareerModel();
        $careerModel->update($_POST['id'], $_POST);
        return redirect()->to('http://localhost/ariska-panel/public/career');
        // var_dump($_POST);
    }
}
