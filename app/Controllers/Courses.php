<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CourseModel;

class Courses extends Controller
{

    public function index()
    {

        $model = new CourseModel();

        $data['courses'] = $model->orderBy('id', 'DESC')->findAll();

        return view('courses', $data);
    }

    public function create()
    {
        return view('create-course');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new CourseModel();

        $data = [
            'course' => $this->request->getVar('course'),

            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('courses') );
    }

    public function edit($id = null)
    {

     $model = new CourseModel();

     $data['course'] = $model->find($id);

     return view('edit-course', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new CourseModel();

        $id = $this->request->getVar('id');

        $data = [
            'course' => $this->request->getVar('course'),
          
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('courses') );
    }

    public function delete($id = null)
    {

     $model = new CourseModel();

     $data['course'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('courses') );
    }
}
