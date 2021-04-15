<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ScheduleModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;
use App\Models\AttendanceModel;
use App\Models\CourseModel;
use App\Models\ProfessorModel;
class Schedules extends Controller
{

    public function index()
    {

        $scheduleModel = new ScheduleModel();
        //
        // $data['schedules'] = $model->orderBy('id', 'DESC')->findAll();
        // $subjectModel = new SubjectModel();
        $data['schedules'] = $scheduleModel->show();

        return view('schedules', $data);
    }

    public function create()
    {
        $subjectModel = new SubjectModel();
        $courseModel = new CourseModel();
        $subjectModel = new SubjectModel();
        $professorModel = new ProfessorModel();
        $data['subjects'] = $subjectModel->orderBy('id', 'DESC')->findAll();
        $data['courses'] = $courseModel->findAll();
        $data['subjects'] = $subjectModel->findAll();
        $data['professors'] = $professorModel->findAll();
        return view('create-schedule', $data);
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new ScheduleModel();

        $data = [
            'subject_id' => $this->request->getVar('subject_id'),
            'course_id' => $this->request->getVar('course_id'),
            'professor_id' => $this->request->getVar('professor_id'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'date_sched' => $this->request->getVar('date_sched'),
            'lab_used' => $this->request->getVar('lab_used'),
            'semester' => $this->request->getVar('semester'),
            'school_year' => $this->request->getVar('school_year'),
            // 'firstname'  => $this->request->getVar('firstname'),
            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('schedules') );
    }

    public function edit($id = null)
    {
     $subjectModel = new SubjectModel();
     $data['subjects'] = $subjectModel->orderBy('id', 'DESC')->findAll();

     $model = new ScheduleModel();
     $data['schedule'] = $model->find($id);
     return view('edit-schedule', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new ScheduleModel();

        $id = $this->request->getVar('id');

        $data = [
            'subject_id' => $this->request->getVar('subject_id'),
            'course_id' => $this->request->getVar('course_id'),
            // 'firstname'  => $this->request->getVar('firstname'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('schedules') );
    }

    public function delete($id = null)
    {

     $model = new ScheduleModel();

     $data['schedule'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('schedules') );
    }

    public function attendance($id){
      $scheduleModel = new ScheduleModel();
      $attendanceModel = new AttendanceModel();
      $data['schedules'] = $scheduleModel->showByID($id);
      $data['attendances'] = $attendanceModel->show($id);

      return view('attendance', $data);
    }

    public function timein(){
      $studentModel = new StudentModel();
      $attendanceModel = new AttendanceModel();
      $scheduleModel = new ScheduleModel();
      $session = \Config\Services::session();
      // session_start();
      date_default_timezone_set('Asia/Manila');
      $schedule = $scheduleModel->showByID($_POST['schedule_id']);
      if (strtotime($schedule[0]['start_time']) > date('H:i:s')) {
        $student = $studentModel->where('studentnumber', $_POST['student_number'])->findAll();

        if(empty($student)){
          $session->setFlashdata('error_message', 'Student Not Found!');
          return redirect()->to( base_url('schedules/attendance/'.$_POST['schedule_id']));
        } else {
          $student_attendance = $attendanceModel->where(['student_id' => $student[0]['id'], 'schedule_id' => $_POST['schedule_id']])->findAll();
          // print_r($_POST);
          // die();
          if(empty($student_attendance)){
            $data = [
              'schedule_id' => $_POST['schedule_id'],
              'student_id' => $student[0]['id'],
              'time_in' => date('H:i:s'),
            ];
            $attendanceModel->insert($data);
            $session->setFlashData('error_message', 'Successfuly Timed In!');
            return redirect()->to( base_url('schedules/attendance/'.$_POST['schedule_id']));
          } else {
            if($student_attendance[0]['time_out'] == null){
              $data = [
                'time_out' => date('H:i:s'),
              ];
              $attendanceModel->update($student_attendance[0]['id'], $data);
              $session->setFlashData('success_message', 'Successfuly Timed Out!');
              return redirect()->to( base_url('schedules/attendance/'.$_POST['schedule_id']));
            } else {
              $session->setFlashData('error_message', 'This student is already timed in / timed out');
              return redirect()->to( base_url('schedules/attendance/'.$_POST['schedule_id']));
            }
          }
        }
      } else {
        $session->setFlashData('error_message', 'Student Not Found!');
        return redirect()->to( base_url('schedules/attendance/'.$_POST['schedule_id']));
      }
    }

}
