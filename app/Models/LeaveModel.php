<?php

namespace App\Models;

use CodeIgniter\Model;

class LeaveModel extends Model
{

    protected $table = 'leaves';
    protected $allowedFields = [
        'staff_number',
        'leave_type',
        'start_date',
        'end_date',
        'leave_status',
        'approver_id'
    ];

    public function createLeave(array $details)
    {
        $this->insert($details);
    }

    public function leaveHistory(int $staff_id = null)
    {
        if ($staff_id != null)
            return $this->select('leave_id, leave_type, start_date, end_date, leave_status')->where('staff_number', $staff_id)->get()->getResultArray();

        return $this->findAll();
    }
}
