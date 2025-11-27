<?php

namespace App\Controllers;

class Formular extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('formular');
        echo view('templates/footer');
    }
}