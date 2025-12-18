<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function getIndex()
    {
        echo view('templates/header');
        echo view('startseite');
        echo view('templates/footer');
    }


}
