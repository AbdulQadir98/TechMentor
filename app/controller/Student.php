<?php

class Student extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data = [];
        $result = $this->model->getStudents();
        $data['result'] = $result;

        $this->view->render("Student", $data);
    }    

    public function submit(){
        
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

		$result = $this->model->addStudent($firstname, $lastname);
        $this->redirect("Student");

    }

}