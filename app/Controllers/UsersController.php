<?php

namespace App\Controllers;
use App\Models\UserModel;

class UsersController extends BaseController
{
    public function index()
    {
        return view('sidemenu');
    }
    public function register()
    {
        return view('register');
    }

    public function store()
    {
        $rules = [
            'id' => 'required|min_length[8]|max_length[9]',
            'title' => 'required',
            'fname' => 'required|min_length[3]|max_length[20]',
            'mname' => 'required|min_length[3]|max_length[20]',
            'lname' => 'required|min_length[3]|max_length[20]',
            'age' => 'required|min_length[2]|max_length[2]',
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
            'confirm-pass' => 'matches[password]',
            'gender' => 'required',
            'kra' => 'required|min_length[11]|max_length[11]|is_unique[users.krapin]',
            'nhif' => 'required|max_length[20]|is_unique[users.nhifpin]',
            'nssf' => 'required|max_length[11]|is_unique[users.nssfpin]',
            'department' => 'required'
        ];

        if ($this->validate($rules))
        {
            //store user in DB
            $model = new UserModel();

            $newData = [
                'id'    => $this->request->getVar('id'),
                'title'    => $this->request->getVar('title'),
                'fname'    => $this->request->getVar('fname'),
                'mname'    => $this->request->getVar('mname'),
                'lname'    => $this->request->getVar('lname'),
                'age'    => $this->request->getVar('age'),
                'postaddress'    => $this->request->getVar('postaddress'),
                'pcode'    => $this->request->getVar('pcode'),
                'town'    => $this->request->getVar('town'),
                'homecounty'=> $this->request->getVar('homecounty'),
                'religion'    => $this->request->getVar('religion'),
                'residence'    => $this->request->getVar('residence'),
                'tel'    => $this->request->getVar('tel'),
                'mobile'    => $this->request->getVar('mobile'),
                'email'    => $this->request->getVar('email'),
                'password'     => $this->request->getVar('password'),
                'gender'    => $this->request->getVar('gender'),
                'kra' => $this->request->getVar('kra'),
                'nhif'    => $this->request->getVar('nhif'),
                'nssf'    => $this->request->getVar('nssf'),
                'department'    => $this->request->getVar('department')
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

