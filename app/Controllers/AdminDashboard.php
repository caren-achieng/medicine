<?php

namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
       
       if(session()->get('userName')){
        $session = session();
        echo "welcome admin ". $session->get('userName');
        echo view('admin/admin-dashboard');
    }
    }
}
