<?php

namespace App\Models;
use CodeIgniter\Model;


class Review extends Model{

    protected $table = 'leaves';

    protected $allowedFields = [
        'leave_id',
        'staff_number',
        'leave_type',
        'start_date',
        'end_date',
        'leave_status',
        'approver_id'
        
    ];

}