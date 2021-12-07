<?php

namespace App\Controllers;
use App\Models\LeaveModel;
use App\Models\UserModel;
use org\bovigo\vfs\vfsStreamWrapperUnregisterTestCase;

class AdminDashboard extends BaseController
{
    public function initialize_dashboard(){
        $administrators = new UserModel();
        $data['admins'] = $administrators->join('departments', 'departments.departmentid = department')->whereIn('role', [1])->paginate();
        $data['pager'] = $administrators->pager;
        $status = new LeaveModel();
        $data['leaves'] = $status->join('users', 'users.staff_number = leaves.staff_number')->paginate();
        $data['pager2'] = $status->pager;
        echo view('admin/dashboard', $data);
    }
    public function leaves()
    {
        echo view('admin/leaves');
    }
    public function notifications()
    {
        echo view('admin/notifications');
    }
    public function user()
    {
        $session=session();
        $user_id = $session->get('userID');
        $model = new UserModel();
        $data['user'] = json_decode(json_encode($model->join('departments', 'departments.departmentid = users.department')->getWhere(['staff_number' => $user_id])->getResult()), true);

        echo view('admin/user', $data);
    }
    public function users()
    {
        echo view('admin/users');
    }

    public static function getMonth(){
        $model = new LeaveModel();
        $leaves = $model -> findAll();
        $data = [];
        foreach($leaves as $leave){
            $data[] = array(
                'months' => date("m",strtotime($leave['start_date']))
            );
        }
        $counts = array_count_values(array_column($data, 'months'));
        for($x = 1; $x < 13; $x++){
            if(!isset($counts[$x])){
                $counts[$x] = 0;
            }
        }
        return json_encode([$counts[1], $counts[2], $counts[3], $counts[4], $counts[5], $counts[6], $counts[7], $counts[8], $counts[9], $counts[10], $counts[11], $counts[12]]);
    }
    public function deleteUser($id){
        echo("<script type='text/Javascript'>");
        echo('alert("User has been deleted")');
        echo("</script>");
        $model1=new LeaveModel();
        $model2=new EmergencyContactModel();
        $model3=new SpouseModel();
        $model4=new NextofKinModel();
        $model5=new UserModel();

        $sql1="DELETE FROM `leaves` WHERE `staff_number`=?";
        $sql2="DELETE FROM `emergencycontacts` WHERE `staff`=?";
        $sql3="DELETE FROM `spouses` WHERE `staff`=?";
        $sql4="DELETE FROM `nextofkin` WHERE `staff`=?";
        $sql5="DELETE FROM `users` WHERE `staff_number`=?";

        $model1->query($sql1,array($id));
        $model2->query($sql2,array($id));
        $model3->query($sql3,array($id));
        $model4->query($sql4,array($id));
        $model5->query($sql5,array($id));
        return redirect()->to('/dashboard')->with('status','admin deleted');
    }
}

