<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\SpouseModel;
use App\Models\NextofKinModel;
use App\Models\EmergencyContactModel;

class AdminsController extends BaseController
{
    public function ReadEmployees()
    {
        $employees = new UserModel();
        $data['employees'] = json_decode(json_encode($employees->whereIn('role', [1])->paginate()),true);
        $data['pager'] = $employees->pager;
        return view('admin/EmployeeCRUD/ReadEmployees', $data);
    }

    public function admins()
    {
        $admins= new UserModel();
        $data['admins'] = json_decode(json_encode($admins->whereIn('role', [2])->paginate()),true);
        $data['pager'] = $admins->pager;
        echo view('admin/header');
        echo view('admin/css');
        echo view('admin/navtop');
        echo view('admin/navleft');
        echo view('admin/admins', $data);
        echo view('admin/footer');
        echo view('admin/htmlclose');
    }

    public function edit($id)
    {
        $department = new DepartmentModel();
        $data['departments']=$department->findAll();
        $employee = new UserModel();
        $data['employee'] = $employee->find($id);
        return view('admin/EmployeeCRUD/UpdateEmployees',$data);
    }

    public function update($id)
    {
        $client = new UserModel();
        $data = [
            'first_name'     => $this->request->getVar('first_name'),
            'last_name'    => $this->request->getVar('last_name'),
            'email'    => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
            'gender'    => $this->request->getVar('gender'),
            'role'=> 1
        ];
        $client->update($id,$data);
        return redirect()->to(base_url('clients'))->with('status','Data Updated Successfully');
    }

    public function delete($id){
        $client = new UserModel();
        $client->delete($id);
        return redirect()->to(base_url('clients'))->with('status','Data Deleted Successfully');
    }
}

