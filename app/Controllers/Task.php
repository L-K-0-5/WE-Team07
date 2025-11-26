<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function index(): string
    {
        return view('startseite');
    }
}