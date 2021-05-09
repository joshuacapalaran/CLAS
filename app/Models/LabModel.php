<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class LabModel extends Model
{
    protected $table = 'labs';

    protected $allowedFields = ['date', 'start_time', 'end_time', 'lab_used', 'purpose', 'remarks', 'updated_at', 'deleted_at'];
    protected $useSoftDeletes = true;

    public function view()
    {
      return $this->findAll();
    }

    // public function showsec()
    // {
    //   $this->select('*');
    //   $this->join('students', 'courses.id = students.course_id');
    //   // $query = $this-> get();
    //   // print_r( $query->getResult());
    //   // die();
    //   return $this->findAll();
    // }
}
