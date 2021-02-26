<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['visitor_name', 'visitor_purpose', 'visitor_lab', 'time_in', 'time_out'];

    public function check($name)
    {
      $this->select('*');
      $this->where('visitor_name', $name);
      return $this->findAll();
      // $this->getResultArray();
      // echo $this->getCompiledSelect();
    }
}
