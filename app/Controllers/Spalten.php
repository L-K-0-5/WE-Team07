<?php

namespace App\Controllers;

class Spalten extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('spalten');
        echo view('templates/footer');
    }
}