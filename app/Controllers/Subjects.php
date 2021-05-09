<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\SubjectModel;

class Subjects extends Controller
{

    public function index()
    {

        $model = new SubjectModel();

        $data['subjects'] = $model->view();

        return view('subjects', $data);
    }

    public function create()
    {
        return view('create-subject');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new SubjectModel();

        $data = [
            'subject_code' => $this->request->getVar('subject_code'),
            'subject_name'  => $this->request->getVar('subject_name'),
            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('subjects') );
    }

    public function edit($id = null)
    {

     $model = new SubjectModel();

     $data['subject'] = $model->find($id);

     return view('edit-subject', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new SubjectModel();

        $id = $this->request->getVar('id');

        $data = [
            'subject_code' => $this->request->getVar('subject_code'),
            'subject_name'  => $this->request->getVar('subject_name'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('subjects') );
    }

    public function delete($id = null)
    {

     $model = new SubjectModel();

     $data['subject'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('subjects') );
    }
}
