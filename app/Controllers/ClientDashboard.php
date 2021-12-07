<?php

namespace App\Controllers;

use App\Models\LeaveModel;

class ClientDashboard extends BaseController
{
    public function index()
    {
        echo view('templates/dashboard-header');
        echo view('home-section/leave-application');
        echo view('templates/dashboard-footer');
    }

    public function leaveHistory()
    {
        session();
        $leave = new LeaveModel();

        $history = $leave->leaveHistory($_SESSION['userID']);

        return $this->response->setJSON($history);
    }
}
