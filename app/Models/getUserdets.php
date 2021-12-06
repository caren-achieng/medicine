<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use PHPUnit\TextUI\CliArguments\Builder;
use CodeIgniter\Model;

//This model joins data from the leaves table to the users table.
class getUserdets extends Model{
    protected $db;
    public function __construct(ConnectionInterface $db){
        $this->db=&$db;
    }
    function getU(){
        $builder= $this->db->table('leaves');
        $builder->join('users', 'leaves.staff_number=users.staff_number');
        $leaves=$builder->get()->getResult();
        return $leaves;
    }
}