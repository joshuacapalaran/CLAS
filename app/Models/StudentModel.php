<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students';

    protected $allowedFields = ['studentnumber', 'lastname', 'firstname', 'm_initial', 'course_id', 'year', 'pcnum', 'updated_at'];
}
