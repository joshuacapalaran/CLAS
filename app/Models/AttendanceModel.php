<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class AttendanceModel extends Model
{
    protected $table = 'attendances';

    protected $allowedFields = ['schedule_id', 'student_id', 'time_in', 'time_out', 'remarks', 'created_at', 'updated_at'];

    public function show($id){
      $this->join('students', 'students.id = attendances.student_id');
      $this->where('attendances.schedule_id', $id);
      return $this->findAll();
    }
}
