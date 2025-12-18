<?php
namespace App\Controllers;
use App\Models\TaskModel;

class Personen extends BaseController
{
    public function getIndex(): void
    {
        $mymodel = new TaskModel();

        $data['personen'] = $mymodel->getData();


        echo view('templates/header');
        echo view('pages/personen', $data);
        echo view('templates/footer');

    }


}