<?php

namespace App\Controllers;
use App\Models\getUserdets;
use stdClass;
use App\Models\leaveapp_mod;
class Leave_approval extends BaseController
{
    public function index()
    {
        return view('admin/leave-approval.php');
    }
    //This function fetches data from the database(tables(user and leaves)) stores it in an array
    //and passess it to the view leave_apporval
    public function leavedets($id){
        $db=db_connect();
        $model= new getUserdets($db);
        $post= $model->getU();
        $data=['staffID'=>"unavailable",'firstName'=>"unavailable",'lastName'=>"unavailable",
        'dept'=>"unavailable",'leavetype'=>"unavailable",
        'start'=>"unavailable",'end'=>"unavailable",'state'=>"unavailable"];
        if($post){
            foreach($post as $arr){
                $arr = json_decode(json_encode($arr), true);
                if($arr['leave_id']==$id){
                    $data=['leaveID'=>$arr['leave_id'],'staffID'=>$arr['staff_number'],
                    'leavetype'=>$arr['leave_type'],
                    'start'=>$arr['start_date'],'end'=>$arr['end_date'],'firstName'=>$arr['fname'],'lastName'=>$arr['lname'],
                        'dept'=>$arr['department'],];
                }
            }
        }
        return view('admin/leave-approval.php',$data);

    }
    // public function approve_leave($id){
    //     $model=new leaveapp_mod();
    //     $state=['leave_status'=>'approved'];
    //     $model->update($id,$state);
    //     $result=$this->leavedets($id);
    //     return $result;

    // }
    // public function deny_leave($id){
    //     $model=new leaveapp_mod();
    //     $state=['leave_status'=>'denied'];
    //     $model->update($id,$state);
    //     $result=$this->leavedets($id);
    //     return $result;
    // }
    public function leave_approval(){
        $id = $this->request->getVar('leave_id');
        $model=new leaveapp_mod();
        if($this->request->getVar('approve') == 'Approve'){
            $state=['leave_status'=>'Approved'];
        }else{
            $state=['leave_status'=>'Denied'];
        }
        $model->update($id,$state);
        $result=$this->leavedets($id);
        return redirect()->to('/review');
    }

}
