<?php

namespace App\Controllers;

use App\Models\Review;
use App\Models\UserModel;


class LeaveReview extends BaseController
{
    public function index()
    {
        helper (['form', 'url']);
        $users=new UserModel();
        $leavesApplied= new Review();
        $data1['leavesPendingData'] = json_decode(json_encode($leavesApplied->join('users','users.staff_number=leaves.staff_number')->WHERE('leave_status=',"Pending")->findAll()),true);

        return view('admin/review',$data1);
    }

}
