<?php

namespace App\Models;

use CodeIgniter\Model;

class LeaveDays extends Model
{

    protected $table = 'leave_days';
    protected $primaryKey = 'leave_staff_id';

    protected $allowedFields = [
        'staff_number',
        'maternity',
        'paternity',
        'special',
        'compassionate',
        'sick',
        'sabbatical',
        'absence'
    ];

    public function createLeaveUser(int $staff_id)
    {
        $this->insert(['staff_number' => $staff_id]);
    }

    public function search(int $staff_id)
    {
        $leave = $this->where('staff_number', $staff_id)->first();

        if ($leave == [] || $leave == null)
            return false;

        return true;
    }

    public function leaveBalance(string $leaveType, int $staff_id)
    {
        return $this->where('staff_number', $staff_id)->first()[$leaveType];
    }

    public function newBalance(string $leaveType, int $staff_id, int $amount)
    {
        $balance = $this->leaveBalance($leaveType, $staff_id);
        $new_balance = $balance - $amount;

        $this->whereIn('staff_number', [$staff_id])->set($leaveType, $new_balance)->update();
    }
}
