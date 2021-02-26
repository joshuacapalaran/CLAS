<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VisitorModel;

class Visitors extends Controller
{

    public function index()
    {

        $model = new VisitorModel();

        $data['visitors'] = $model->orderBy('id', 'DESC')->findAll();

        return view('visitors', $data);
    }

    public function timein()
    {
        return view('timein-visitor');
    }

    public function store_time_in()
    {

        helper(['form', 'url']);
        date_default_timezone_set('Asia/Singapore');
        $model = new VisitorModel();

        $data = [
            'visitor_name' => $this->request->getVar('visitor_name'),
            'visitor_purpose' => $this->request->getVar('visitor_purpose'),
            'visitor_lab' => $this->request->getVar('visitor_lab'),
            'time_in' => date('Y-m-d H:i:s'),
            // 'firstname'  => $this->request->getVar('firstname'),
            ];

        $save = $model->insert($data);

        return redirect()->to( base_url('visitors') );
    }

    public function timeout()
    {
        return view('timeout-visitor');
    }

    public function store_time_out()
    {

        helper(['form', 'url']);
        date_default_timezone_set('Asia/Singapore');
        $model = new VisitorModel();

        // $id = $model->check($_POST['visitor_name'])[0]['id'];
        $check = $model->check($this->request->getVar('visitor_name'));

        if (!empty($model->check($_POST['visitor_name']))) {
          $id = $model->check($_POST['visitor_name'])[0]['id'];
          $data = [

              'time_out' => date('Y-m-d H:i:s'),

              ];
              $save = $model->update($id ,$data);
            
              return redirect()->to( base_url('visitors') );
        } else {

              // $message = "Data Not Found!";
              echo "<script type='text/javascript'>alert('Data Not Found!');</script>";
              // return redirect()->to( base_url('visitors') );
        }
    }
}
