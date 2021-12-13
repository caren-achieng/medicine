<?php

namespace App\Controllers;

use App\Models\LeaveModel;
use App\Models\LeaveDays;
use App\Models\UserModel;
use DateTime, DateInterval, DatePeriod;

class LeaveController extends BaseController
{
    public function index()
    {
        session();
        return view('home-section/apply', $_SESSION);
    }

    private function workingDays($from, $to)
    {
        $workingDays = [1, 2, 3, 4, 5]; # date format = N (1 = Monday, ...)
        $holidayDays = ['*-12-25', '*-01-01', '*-06-01', '*-12-12', '*-10-20', '*-05-01']; # variable and fixed holidays

        $from = new DateTime($from);
        $to = new DateTime($to);
        $to->modify('+1 day');
        $interval = new DateInterval('P1D');
        $periods = new DatePeriod($from, $interval, $to);

        $days = 0;
        foreach ($periods as $period) {
            if (!in_array($period->format('N'), $workingDays)) continue;
            if (in_array($period->format('*-m-d'), $holidayDays)) continue;
            $days++;
        }
        return $days;
    }

    public function newLeave()
    {
        session();
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            $leave = new LeaveModel();
            $leave_days = new LeaveDays();

            $start = $this->request->getVar('startDate');
            $end = $this->request->getVar('endDate');
            $leave_type = $this->request->getVar('leaveType');


            if ($leave_type == 'maternity' || $leave_type == 'paternity' || $leave_type == 'sabbatical')
                $diff = 1;
            else
                $diff = $this->workingDays($start, $end);

            $balance = $leave_days->leaveBalance($leave_type, $_SESSION['userID']);

            $rules = [
                'startDate' => [
                    'rules' => 'required|check_date',
                    'label' => 'Start Date',
                    'errors' => [
                        'check_date' => 'You cannot add a Start Date before today'
                    ]
                ],
                'endDate' => [
                    'rules' => 'required|check_date',
                    'label' => 'End Date',
                    'errors' => [
                        'check_date' => 'You cannot add an End Date before today'
                    ]
                ]
            ];

            if ($this->validate($rules) && $diff > 0 && $balance >= $diff) {
                echo "if";
                $details = [
                    'staff_number' => $_SESSION['userID'],
                    'leave_type' => $leave_type,
                    'start_date' => $start,
                    'end_date' => $end
                ];

                $leave->createLeave($details);
                $leave_days->newBalance($leave_type, $_SESSION['userID'], $diff);

                $_SESSION["created"] = 1;
                return redirect()->route('apply');
            }
            else if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
                $_SESSION['validation'] = $this->validator;
                return redirect()->route('apply');
            }
            else if ($balance < $diff) {
                $data['negative'] = 1;
                $_SESSION['negative']=1;
                return redirect()->route('apply');
            }
            else {
                $data['diff'] = 1;
                $_SESSION['diff']=1;
                return redirect()->route('apply');
            }
        }
    }

    public function gender()
    {
        session();
        $user = new UserModel();

        $gender = $user->gender($_SESSION['userID']);

        return $this->response->setJSON(['gender' => $gender]);
    }

    public function leaveBalance(string $leaveType)
    {
        session();
        $leave = new LeaveDays();

        $leave_exists = $leave->search($_SESSION['userID']);


        if (!$leave_exists)
            $leave->createLeaveUser($_SESSION['userID']);

        $leaveBalance = $leave->leaveBalance($leaveType, $_SESSION['userID']);

        return $this->response->setJSON([$leaveType => $leaveBalance]);
    }

    public function telNo()
    {
        session();
        $user = new UserModel();

        $telNo = $user->telNo($_SESSION['userID']);

        return $this->response->setJSON(['telNo' => $telNo]);
    }
}
