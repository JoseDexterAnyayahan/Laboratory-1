<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class StudentController extends BaseController
{
    private $student;
    private $section;

    public function __construct(){
        $this->student = new \App\Models\StudentModel();
        $this->section = new \App\Models\SectionModel();
    }

    public function student(){
        $data = [
          'student' => $this->student->findAll(),
          'section' => $this->section->findAll(),
          
          
        ];
        return view('main', $data);
    }

    public function create(){
        $id = $_POST['id'];
        $data = [
            'StudName' => $this->request->getPost('name'),
            'StudGender' => $this->request->getPost('gender'),
            'StudCourse' => $this->request->getPost('course'),
            'StudSection' => $this->request->getPost('section'),
            'StudYear' => $this->request->getPost('year'),
           ];

        if($id != null){
            $this->student->set($data)->where('id', $id)->update();
              
    }
    else{
        $this->student->save($data);
        
    }
    return redirect()->to('main');
    }
    public function delete($id){
        $this->student->delete($id);
        return redirect()->to('main');
        
    }
    public function edit($id){
        $data = [
            'record' => $this->student->where('id', $id)->first(),
            'section' => $this->section->findAll(),
            'student' => $this->student->findAll(),
        ];
        return view('main', $data);

    }
    public function index()
    {
        //
    }
}
