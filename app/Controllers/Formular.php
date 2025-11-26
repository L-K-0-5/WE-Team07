<?php

namespace App\Controllers;

class Formular extends BaseController
{
    public function index(): string
    {
        return view('formular');
    }
}