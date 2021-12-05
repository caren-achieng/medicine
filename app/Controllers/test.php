<?php

namespace App\Controllers;
use App\Models\LeaveModel;

class Test extends BaseController
{
    public function index()
    {
        echo view('examples/dashboard');

    }

    public static function getMonth(){
        $model = new LeaveModel();
        $leaves = $model -> findAll();
        // $month = date("m",strtotime($leaves[0]['start_date']));
        // echo $month;
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
        // return json_encode($counts);
    }
}