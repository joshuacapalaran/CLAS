<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class SubjectModel extends Model
{
    protected $table = 'subjects';
    protected $primaryKey = 'id';
    protected $allowedFields = ['subject_code', 'subject_name', 'updated_at', 'deleted_at'];
    protected $useSoftDeletes = true;

    public function view()
    {
      return $this->findAll();
    }

    public function showsec()
    {
      $this->select('*');
      $this->join('schedules', 'subjects.id = schedules.subject_id');
      // $query = $this-> get();
      // print_r($this->join('schedules', 'subjects.id = schedules.subject_id'););
      // die();
      return $this->findAll();
    }
}
