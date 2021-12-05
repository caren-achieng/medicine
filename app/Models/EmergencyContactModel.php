<?php

namespace App\Models;
use CodeIgniter\Model;
class EmergencyContactModel extends Model{

    protected $table = 'emergencycontacts';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'eid';
    protected $allowedFields =
        [
            'ename',
            'emobile',
            'eemail',
            'staff'
        ];


}