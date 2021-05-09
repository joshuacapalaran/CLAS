<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ProfessorModel extends Model
{
    protected $table = 'professors';

    protected $allowedFields = ['faculty_code', 'faculty_name', 'updated_at', 'deleted_at'];
    protected $useSoftDeletes = true;

    public function view()
    {
      return $this->findAll();
    }
}
