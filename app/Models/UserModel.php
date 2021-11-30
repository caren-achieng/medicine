<?php

namespace App\Models;
use CodeIgniter\Model;
class UserModel extends Model{

    protected $table = 'users';
    protected $useAutoIncrement = true;
    protected $primaryKey = 'staff_number';
    protected $allowedFields = [
        'staff_number',
        'id/passport','title','fname','mname','lname',
        'age','postaddress','postcode','town',
        'county','maritalstatus','religion',
        'residence','mobilenum','hometel','email',
        'krapin','nhifpin','nssfpin','gender', 'department','password'];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data)
    {
        if(isset($data['data']['password']))
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        return $data;
    }
}