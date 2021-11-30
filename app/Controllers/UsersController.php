<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepartmentModel;
use App\Models\SpouseModel;
use App\Models\NextofKinModel;
use App\Models\EmergencyContactModel;

class UsersController extends BaseController
{
    public function index()
    {
        return view('sidemenu');
    }

    public function registerusers()
    {
        $model = new DepartmentModel();
        $departments = json_decode(json_encode($model->get()->getResult()), true);
        $data['departments'] = $departments;
        return view('register', $data);
    }
    public function registerspouses()
    {
        return view('spouse');
    }
    public function registernok()
    {
        return view('nextofkin');
    }
    public function registeremergency()
    {
        return view('emergency');
    }
    public function registerpassword()
    {
        return view('password');
    }
    public function storeusers()
    {
//        dd($this->request->getVar());
        $rules = [
            'id' => 'required|min_length[8]|max_length[9]',
            'title' => 'required',
            'fname' => 'required|min_length[3]|max_length[20]',
            'mname' => 'required|min_length[3]|max_length[20]',
            'lname' => 'required|min_length[3]|max_length[20]',
            'dob' => 'required',
            'postaddress' => 'min_length[5]|max_length[9]',
            'pcode' => 'required',
            'town' => 'min_length[3]|max_length[20]',
            'homecounty' => 'required',
            'religion' => 'required',
            'residence' => 'required|max_length[50]',
            'tel' => 'required|min_length[10]|max_length[10]|is_unique[users.hometel]',
            'mobile' => 'required|min_length[10]|max_length[10]|is_unique[users.mobilenum]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
            'gender' => 'required',
            'kra' => 'required|min_length[11]|max_length[11]|is_unique[users.krapin]',
            'nhif' => 'required|max_length[20]|is_unique[users.nhifpin]',
            'nssf' => 'required|max_length[20]|is_unique[users.nssfpin]',
            'department' => 'required',
            'status' => 'required'
        ];

        if ($this->validate($rules)) {
            //store user in DB
            $model = new UserModel();
            $newData = [
                'id/passport' => $this->request->getVar('id'),
                'title' => $this->request->getVar('title'),
                'fname' => $this->request->getVar('fname'),
                'mname' => $this->request->getVar('mname'),
                'lname' => $this->request->getVar('lname'),
                'dob' => $this->request->getVar('dob'),
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
                'krapin' => $this->request->getVar('kra'),
                'nhifpin' => $this->request->getVar('nhif'),
                'nssfpin' => $this->request->getVar('nssf'),
                'gender' => $this->request->getVar('gender'),
                'department' => $this->request->getVar('department')
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

    public function storespouses()
    {

        $rules = [
            'spousename' => 'required|min_length[1]|max_length[20]',
            'spousenum' => 'required|min_length[10]|max_length[10]|is_unique[spouses.mobileno]',
            'spouseemail' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[spouses.email]',
            'occupation' => 'required|min_length[1]|max_length[50]',
        ];

        if ($this->validate($rules)) {
            //store spouses in DB
            $model = new SpouseModel();
            $newData = [
                'spousename' => $this->request->getVar('spousename'),
                'mobileno' => $this->request->getVar('spousenum'),
                'email' => $this->request->getVar('spouseemail'),
                'occupation' => $this->request->getVar('occupation'),
                'staff' => session()->get('staff_number')
            ];

            $model->save($newData);

            return redirect()->to('/nextofkin');
        }
        else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function storenextofkin()
    {
        $rules = [
            'nokname' => 'required|min_length[1]|max_length[20]',
            'noktel' => 'required|min_length[10]|max_length[10]|is_unique[nextofkin.nokmobile]',
            'nokemail' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[nextofkin.nokemail]',
        ];

        if ($this->validate($rules)) {
            //store nextofkin in DB
            $model = new NextofKinModel();
            $newData = [
                'nokname' => $this->request->getVar('nokname'),
                'nokmobile' => $this->request->getVar('noktel'),
                'nokemail' => $this->request->getVar('nokemail'),
                'staff' => session()->get('staff_number')
            ];

            $model->save($newData);
            return redirect()->to('/emergency');
        }
        else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function storeemergency()
    {
        $rules = [
            'emergencyname' => 'required|min_length[1]|max_length[20]',
            'emergencytel' => 'required|min_length[10]|max_length[10]|is_unique[emergencycontacts.emobile]',
            'emergencyemail' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[emergencycontacts.eemail]',
            'emergencyname2' => 'required|min_length[1]|max_length[20]',
            'emergencyemail2' => 'required|min_length[10]|max_length[50]|is_unique[emergencycontacts.eemail]',
            'emergencytel2' => 'required|min_length[10]|max_length[10]|is_unique[emergencycontacts.emobile]'
        ];

        if ($this->validate($rules)) {
            //store emergencycontacts in DB
            $model = new EmergencyContactModel();
            $newData = [
                'ename' => $this->request->getVar('emergencyname'),
                'emobile' => $this->request->getVar('emergencytel'),
                'eemail' => $this->request->getVar('emergencyemail'),
                'staff' => session()->get('staff_number')
            ];
            $newData2 = [
                'ename' => $this->request->getVar('emergencyname2'),
                'eemail' => $this->request->getVar('emergencyemail2'),
                'emobile' => $this->request->getVar('emergencytel2'),
                'staff' => session()->get('staff_number')
            ];

            $model->save($newData);
            $model->save($newData2);

            return redirect()->to('/password');
        }
        else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }

    public function storepass()
    {
        $rules = [
            'password' => 'required|min_length[8]|max_length[255]'
            ];

        if ($this->validate($rules)) {
            //store password in DB
            $model = new UserModel();
            $newData = [
                'password' => $this->request->getVar('password')
            ];

            $model->update(session()->get('staff_number'),$newData);
            return redirect()->to('/login');
        }
        else {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
    }


}

