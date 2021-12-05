<?php

namespace App\Models;
use CodeIgniter\Model;

class UserAccountModel extends Model
{
    protected $table='user-account';
    protected $primarykey='userID';
    protected $useAutoIncrement = true;
    protected $useTimestamps = false;

    protected $allowedFields=[
        'fullName',
        'userName',
        'email',
        'phoneNumber',
        'userPassword',
        'gender'
      
        
    ];
}