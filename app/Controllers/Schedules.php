<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ScheduleModel;
use App\Models\SubjectModel;
class Schedules extends Controller
{

    public function index()
    {

        // $scheduleModel = new ScheduleModel();
        //
        // $data['schedules'] = $model->orderBy('id', 'DESC')->findAll();
        $subjectModel = new SubjectModel();
        $data['schedules'] = $subjectModel->showsec();

        return view('schedules', $data);
    }

    public function create()
    {
        $subjectModel = new SubjectModel();
        $data['subjects'] = $subjectModel->orderBy('id', 'DESC')->findAll();
        return view('create-schedule', $data);
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new ScheduleModel();

        $data = [
            'subject_id' => $this->request->getVar('subject_id'),
            'course_id' => $this->request->getVar('course_id'),
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
}
