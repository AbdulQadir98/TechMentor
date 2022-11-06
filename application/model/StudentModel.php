<?php

class StudentModel extends Model{

    function __construct() {
        parent::__construct();
    }
    
    function getStudents(){
        $query = "SELECT * FROM student";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } 

    function addStudent($firstname, $lastname){
        $query = "INSERT INTO student (firstname, lastname)  VALUES ('$firstname', '$lastname');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        //bind
    }
    
}