<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\SpouseModel;


class UsersController extends BaseController
{
    public function index()
    {
        return view('sidemenu');
    }
    public function register()
    {
        $model = new DepartmentModel();
        $departments = json_decode(json_encode($model->get()->getResult()), true);
        $data['departments'] = $departments;
        return view('register', $data);
    }

    public function store()
    {
        $rules = [
            'id' => 'required|min_length[8]|max_length[9]',
            'title' => 'required',
            'fname' => 'required|min_length[3]|max_length[20]',
            'mname' => 'required|min_length[3]|max_length[20]',
            'lname' => 'required|min_length[3]|max_length[20]',
            'dob' => 'required',
            'postaddress' => 'min_length[5]|max_length[9]',
            'pcode' => 'min_length[10]|max_length[20]',
            'town' => 'min_length[3]|max_length[20]',
            'homecounty' => 'required',
            'religion' => 'required',
            'residence' => 'required|max_length[50]',
            'tel' => 'required|min_length[10]|max_length[10]|is_unique[users.hometel]',
            'mobile' => 'required|min_length[10]|max_length[10]|is_unique[users.mobilenum]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'gender' => 'required',
            'kra' => 'required|min_length[11]|max_length[11]|is_unique[users.krapin]',
            'nhif' => 'required|max_length[20]|is_unique[users.nhifpin]',
            'nssf' => 'required|max_length[20]|is_unique[users.nssfpin]',
            'department' => 'required',
            'status'=>'required',
            'spousename'=>'required',
            'mobileno'=>'required',
            'spouse-email'=>'email|required',
            'occupation'=>'required'
        ];

        if ($this->validate($rules))
        {
            //store user in DB
            $model = new UserModel();

            $newData = [
                'id/passport'    => $this->request->getVar('id'),
                'title'    => $this->request->getVar('title'),
                'fname'    => $this->request->getVar('fname'),
                'mname'    => $this->request->getVar('mname'),
                'lname'    => $this->request->getVar('lname'),
                'dob'    => $this->request->getVar('dob'),
                'postaddress'    => $this->request->getVar('postaddress'),
                'postcode'    => $this->request->getVar('pcode'),
                'town'    => $this->request->getVar('town'),
                'county'=> $this->request->getVar('homecounty'),
                'maritalstatus' => $this->request->getVar('status'),
                'religion'    => $this->request->getVar('religion'),
                'residence'    => $this->request->getVar('residence'),
                'mobilenum'    => $this->request->getVar('mobile'),
                'hometel'    => $this->request->getVar('tel'),
                'email'    => $this->request->getVar('email'),
                'krapin' => $this->request->getVar('kra'),
                'nhifpin'    => $this->request->getVar('nhif'),
                'nssfpin'    => $this->request->getVar('nssf'),
                'gender'    => $this->request->getVar('gender'),
                'password'     => $this->request->getVar('password'),
                'department'    => $this->request->getVar('department')
            ];

            $newData2=[
                'spousename'=>$this->request->getVar('spousename'),
                'mobileno'=>$this->request->getVar('spousenum'),
                'email'=>$this->request->getVar('spouseemail'),
                'occupation'=>$this->request->getVar('occupation')
            ];

            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Successful Registration!');
            return redirect()->to('/login');
        }
        else
        {
            return redirect()->back()->withInput()->with('errors',$this->validator->getErrors());
        }
    }
}

