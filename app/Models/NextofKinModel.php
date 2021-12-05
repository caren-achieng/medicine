<?php

namespace App\Models;
use CodeIgniter\Model;
class NextofKinModel extends Model{

    protected $table = 'nextofkin';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'nokid';
    protected $allowedFields =
        [
            'nokname',
            'nokmobile',
            'nokemail',
            'staff'
        ];


}