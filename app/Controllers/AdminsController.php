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
        $data['employee'] = json_decode(json_encode($employee->join('departments', 'departments.departmentid = users.department')->getWhere(['staff_number' => $id])->getResult()), true);
        return view('admin/EmployeeCRUD/UpdateEmployees',$data);
    }

    public function storeusers()
    {
        $rules = [
            'postaddress' => 'min_length[5]|max_length[9]',
            'pcode' => 'required',
            'town' => 'min_length[3]|max_length[20]',
            'homecounty' => 'required',
            'religion' => 'required',
            'residence' => 'required|max_length[50]',
            'tel' => 'required|min_length[10]|max_length[10]|is_unique[users.hometel]',
            'mobile' => 'required|min_length[10]|max_length[10]|is_unique[users.mobilenum]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'nhif' => 'required|max_length[20]|is_unique[users.nhifpin]',
            'nssf' => 'required|max_length[20]|is_unique[users.nssfpin]',
            'department' => 'required',
            'status' => 'required',
            'role'=>'required'
        ];

        if ($this->validate($rules)) {
            //store user in DB
            $model = new UserModel();
            $newData = [
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

            $model->save($newData);
            $number =  (string) $this->request->getVar('tel');
            $data = $model->where('hometel', $this->request->getVar('tel'))
                ->first();
            session()->set($data);

            return redirect()->to('/spouse');

        }
        else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
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

