<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LabModel;

class Labs extends Controller
{

    public function index()
    {

        $model = new LabModel();

        $data['labs'] = $model->view();

        return view('labs', $data);
    }

    public function create()
    {
        return view('create-lab');
    }

    public function store()
    {

        helper(['form', 'url']);

        $model = new LabModel();

        $data = [
            'date' => $this->request->getVar('date'),
            'start_time' => $this->request->getVar('start_time'),
            'end_time' => $this->request->getVar('end_time'),
            'lab_used' => $this->request->getVar('lab_used'),
            'purpose' => $this->request->getVar('purpose'),
            'remarks' => $this->request->getVar('remarks'),

            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('labs') );
    }

    public function edit($id = null)
    {

     $model = new LabModel();

     $data['lab'] = $model->find($id);

     return view('edit-lab', $data);
    }

    public function update()
    {

        helper(['form', 'url']);

        $model = new LabModel();

        $id = $this->request->getVar('id');

        $data = [
            'date' => $this->request->getVar('date'),
            'lab_used' => $this->request->getVar('lab_used'),
            'purpose' => $this->request->getVar('purpose'),
            'remarks' => $this->request->getVar('remarks'),
            'updated_at' => date('Y-m-d H:i:s'),
            ];

        $save = $model->update($id,$data);

        return redirect()->to( base_url('labs') );
    }

    public function delete($id = null)
    {
     $model = new LabModel();
     $data['lab'] = $model->where('id', $id)->delete();
     return redirect()->to( base_url('labs') );
    }
}
