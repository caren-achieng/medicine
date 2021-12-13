<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'users';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'staff_number';
    protected $allowedFields = [
        'id/passport', 'title', 'fname', 'mname', 'lname',
        'age', 'postaddress', 'postcode', 'town',
        'county', 'maritalstatus', 'religion',
        'residence', 'mobilenum', 'hometel', 'email',
        'krapin', 'nhifpin', 'nssfpin', 'gender', 'department', 'password', 'role','is_deleted'
    ];

    public function gender(int $staff_id)
    {
        return $this->where('staff_number', $staff_id)->first()['gender'];
    }

    public function telNo(int $staff_id)
    {
        return $this->where('staff_number', $staff_id)->first()['mobilenum'];
    }
}
