<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('startseite');
        echo view('templates/footer');
    }
}