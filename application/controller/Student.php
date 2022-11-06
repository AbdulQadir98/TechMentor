<?php

class Student extends Controller{

    public function __construct(){
        parent::__construct();
    }


    public function index(){
        $result = $this->model->getStudents();
        $data = [];
        $data['result'] = $result;

        $this->view->render("Student", $data);
    }    


    public function add(){
        $this->view->render("StudentForm");
    }    


    public function submit(){
        $firstname = $_GET['firstname'];
        $lastname = $_GET['lastname'];

		$result = $this->model->addStudent($firstname, $lastname);
        $this->redirect("Student");

    }

}