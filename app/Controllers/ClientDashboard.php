<?php

namespace App\Controllers;

class ClientDashboard extends BaseController
{
    public function index()
    {
        echo view('templates/dashboard-header');
        echo view('home-section/leave-application');
        echo view('templates/dashboard-footer');
    }
}
