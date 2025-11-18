<?php
class LecturerController {

    public function index() {
        $lec = new Lecturer();
        $dept = new Department();

        $data = $lec->all();
        $departments = $dept->all();

        include "views/lecturer/index.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $lec = new Lecturer();
            $lec->create($_POST);

            header("Location: index.php?c=Lecturer&a=index");
            exit;
        }
    }

public function edit() {
    $lecturerModel = new Lecturer();
    $dept = new Department();

    $departments = $dept->all();
    $lec = $lecturerModel->find($_GET['id']); 

    include "views/lecturer/form.php";
}

   
public function update() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $lec = new Lecturer();
        
        $id = $_POST['id']; 
        
        $lec->update($id, $_POST); 
        
        header("Location: index.php?c=Lecturer&a=index");
        exit;
    }
}

    public function delete() {
        $lec = new Lecturer();
        $lec->delete($_GET['id']);

        header("Location: index.php?c=Lecturer&a=index");
    }
}
