<?php

namespace App\Models;
use CodeIgniter\Model;
class DepartmentModel extends Model{

    protected $table = 'departments';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'departmentid';
    protected $allowedFields =
        [
            'departmentid',
            'departmentname'
        ];


}