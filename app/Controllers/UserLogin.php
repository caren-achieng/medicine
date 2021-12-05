<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserLogin extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('sign-up/user-login');
    }

    public function signin()
    {
        helper (['form']); 
        $session=session();
        $model=new UserModel();

        $email= $this->request->getVar('user-email');
        $password= $this->request->getVar('login-password');
        $data= $model->where('email', $email)->first();

        if($data){
            $pass=$data['password'];
            $userName=$data['fname'];
           //$pwd_verify=password_verify($password, $pass);


//            var_dump($userName);
//            var_dump($pass);
//            var_dump($password);
//            //var_dump($pwd_verify);

            if($pass==$password){
                $sessionData=[
                    'userID'=>$data['staff_number'],
                    'userName'=>$data['fname'],
                    'email'=>$data['email'],
                    'isSignedIn'=>TRUE

                ];

                $session->set($sessionData);
                return redirect()->to('/ClientDashboard');
            }else{
                //var_dump($session);
                $session->setFlashdata('msg','Wrong password. Please enter correct password');
                return view('sign-up/user-login');
                
            }

        }else{
            $session->setFlashdata('msg','Email does not exist. Please enter correct Email!');
            return view('sign-up/user-login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/UserLogin');
    }
}