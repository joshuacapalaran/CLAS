<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentModel;
use App\Models\CourseModel;

class Students extends Controller
{

    public function index()
    {

        // $model = new StudentModel();
        //for foreign key
        $courseModel = new CourseModel();
        $data['students'] = $courseModel->showsec();
        // print_r( $data['qsec']);
        // die();
        //for foreign key
        // $data['students'] = $model->orderBy('id', 'DESC')->findAll();

        // $data['courses'] = $courseModel->orderBy('id', 'DESC')->findAll();
        // echo "<pre>";
        // print_r($data['qsec']);
        // echo "</pre>";
        // die();
        return view('students', $data);
    }

    public function create()
    {
        //for foreign key
        $courseModel = new CourseModel();
        $data['courses'] = $courseModel->orderBy('id', 'DESC')->findAll();
        //
        return view('create-student', $data);
    }

    public function store()
    {
        // echo $this->request->getVar('course');
        // die();
        helper(['form', 'url']);

        $model = new StudentModel();

        $data = [
            'studentnumber' => $this->request->getVar('studentnumber'),
            'lastname' => $this->request->getVar('lastname'),
            'firstname'  => $this->request->getVar('firstname'),
            'm_initial'  => $this->request->getVar('m_initial'),
            //for foreign key
            'course_id'  => $this->request->getVar('course'),
            //
            'year'  => $this->request->getVar('year'),
            'pcnum'  => $this->request->getVar('pcnum'),
            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('students') );
    }

    public function edit($id = null)
    {
      //for foreign key
     $courseModel = new CourseModel();
     $data['courses'] = $courseModel->orderBy('id', 'DESC')->findAll();
     //
     $model = new StudentModel();
     $data['student'] = $model->find($id);
     return view('edit-student', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new StudentModel();

        $id = $this->request->getVar('id');

        $data = [
            'studentnumber' => $this->request->getVar('studentnumber'),
            'lastname' => $this->request->getVar('lastname'),
            'firstname'  => $this->request->getVar('firstname'),
            'm_initial'  => $this->request->getVar('m_initial'),
            'course_id'  => $this->request->getVar('course'),
            'year'  => $this->request->getVar('year'),
            'pcnum'  => $this->request->getVar('pcnum'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('students') );
    }

    public function delete($id = null)
    {
     $model = new StudentModel();
     $data['student'] = $model->where('id', $id)->delete();
     return redirect()->to( base_url('students') );
    }
}
