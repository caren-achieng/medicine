<?php

namespace App\Controllers;

class Calendar extends BaseController
{
    public function index()
    {
        echo view('templates/dashboard-header');

        echo view('extensions/calendar');
        
        echo view('templates/dashboard-footer');
    }
}
