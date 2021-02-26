<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ScheduleModel extends Model
{
    protected $table = 'schedules';

    protected $allowedFields = ['subject_id', 'course_id', 'start_time', 'end_time', 'date_sched', 'lab_used', 'professor_id', 'remarks', 'semester', 'school_year','updated_at'];
}
