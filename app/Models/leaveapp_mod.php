<?php namespace App\Models;

use CodeIgniter\Model;


class leaveapp_mod extends Model{
  protected $table ="leaves";
  protected $primaryKey="leave_id"; 
  
  
  protected $allowedFields=['leave_type','start_date', 'end_date','leave_status'];
}
