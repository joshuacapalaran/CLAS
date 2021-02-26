<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProfessorModel;

class Professors extends Controller
{

    public function index()
    {

        $model = new ProfessorModel();

        $data['professors'] = $model->orderBy('id', 'DESC')->findAll();

        return view('professors', $data);
    }

    public function create()
    {
        return view('create-professor');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new ProfessorModel();

        $data = [
            'faculty_code' => $this->request->getVar('faculty_code'),
            'faculty_name' => $this->request->getVar('faculty_name'),
            // 'firstname'  => $this->request->getVar('firstname'),
            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('professors') );
    }

    public function edit($id = null)
    {

     $model = new ProfessorModel();

     $data['professor'] = $model->find($id);

     return view('edit-professor', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new ProfessorModel();

        $id = $this->request->getVar('id');

        $data = [
            'faculty_code' => $this->request->getVar('faculty_code'),
            'faculty_name' => $this->request->getVar('faculty_name'),
            // 'firstname'  => $this->request->getVar('firstname'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('professors') );
    }

    public function delete($id = null)
    {

     $model = new ProfessorModel();

     $data['professor'] = $model->where('id', $id)->delete();

     return redirect()->to( base_url('professors') );
    }
}
