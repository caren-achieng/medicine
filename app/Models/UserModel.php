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
        'krapin', 'nhifpin', 'nssfpin', 'gender', 'department', 'password', 'role'
    ];

    public function gender(int $id)
    {
        return $this->where('staff_number', $id)->first()['gender'];
    }
}
