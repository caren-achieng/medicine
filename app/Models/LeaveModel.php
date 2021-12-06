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
}
