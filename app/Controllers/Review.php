<?php

namespace App\Controllers;

use App\Models\UserModel;

class Review extends BaseController
{
    public function index()
    {
        echo view('admin/review');

    }

    public function viewUsers(int $role = null)
    {
        $users = new UserModel();

        $allUsers = $users->getUsers();

        if ($role !== false)
            $allUsers = $users->getUsers($role);


        return $this->response->setJSON($allUsers);
    }
}