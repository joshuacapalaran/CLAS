<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';

    protected $allowedFields = ['subject_id', 'course_id', 'start_time', 'end_time', 'date_sched', 'lab_used', 'professor_id', 'semester', 'school_year','updated_at'];

    public function show()
    {
      $this->select('schedules.*, subjects.subject_name, subjects.subject_code, courses.course, professors.faculty_name');
      $this->join('courses', 'courses.id = schedules.course_id');
      $this->join('professors', 'professors.id = schedules.professor_id');
      $this->join('subjects', 'subjects.id = schedules.subject_id');
      // $query = $this-> get();
      // print_r($this->join('schedules', 'subjects.id = schedules.subject_id'););
      // die();
      return $this->findAll();
    }

    public function showByID($id)
    {
      $this->select('schedules.*, subjects.subject_name, subjects.subject_code, courses.course, professors.faculty_name');
      $this->join('courses', 'courses.id = schedules.course_id');
      $this->join('professors', 'professors.id = schedules.professor_id');
      $this->join('subjects', 'subjects.id = schedules.subject_id');
      $this->where('schedules.id', $id);
      // $query = $this-> get();
      // print_r($this->join('schedules', 'subjects.id = schedules.subject_id'););
      // die();
      return $this->findAll();
    }
}
