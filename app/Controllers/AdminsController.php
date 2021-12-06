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
        $data['employees'] = json_decode(json_encode($employees->join('departments','departments.departmentid=users.department')->whereIn('role', [1])->whereIn('is_deleted',[0])->paginate()),true);
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
        $data['employee'] = json_decode(json_encode($employee->join('departments', 'departments.departmentid = users.department')->getWhere(['staff_number' => $id])->getResult()), true);
        return view('admin/EmployeeCRUD/UpdateEmployees',$data);
    }

    public function update()
    {
        $employee = new UserModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'postaddress' => $this->request->getVar('postaddress'),
            'postcode' => $this->request->getVar('pcode'),
            'town' => $this->request->getVar('town'),
            'county' => $this->request->getVar('homecounty'),
            'maritalstatus' => $this->request->getVar('status'),
            'religion' => $this->request->getVar('religion'),
            'residence' => $this->request->getVar('residence'),
            'mobilenum' => $this->request->getVar('mobile'),
            'hometel' => $this->request->getVar('tel'),
            'email' => $this->request->getVar('email'),
            'nhifpin' => $this->request->getVar('nhif'),
            'nssfpin' => $this->request->getVar('nssf'),
            'department' => $this->request->getVar('department'),
            'role'=> $this->request->getVar('role')
        ];
        $id = $this->request->getVar('id');
        $employee->update($id,$data);
        return redirect()->to(base_url('/ReadEmployees'))->with('status','Data Updated Successfully');
    }

    public function delete($id){
      $data = ['is_deleted'=>1];
      $employee = new UserModel();
      $employee->update($id, $data);

      return redirect()->to(base_url('/ReadEmployees'))->with('status','Data Deleted Successfully');
    }
}

