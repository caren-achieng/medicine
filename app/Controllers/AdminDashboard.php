<?php

namespace App\Controllers;
use App\Models\LeaveModel;

class AdminDashboard extends BaseController
{
    public function index()
    {
        echo view('admin/dashboard');
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
        echo view('admin/user');
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
    }

