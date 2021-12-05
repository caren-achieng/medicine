<?php

namespace App\Controllers;

class Review extends BaseController
{
    public function index()
    {
        echo view('review');
    }
}