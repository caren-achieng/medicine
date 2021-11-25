<?php

namespace App\Models;
use CodeIgniter\Model;
class SpouseModel extends Model{

    protected $table = 'spouses';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'spouseid';
    protected $allowedFields =
        [
            'spouseid',	'spousename',	'mobileno',	'email',	'occupation', 'staff'
        ];


}