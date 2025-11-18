<?php
class DepartmentController {

    public function index() {
        $dept = new Department();
        $data = $dept->all();

        include "views/department/index.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dept = new Department();
            $dept->create($_POST);

            header("Location: index.php?c=Department&a=index");
            exit;
        }
    }

    public function edit() {
        $dept = new Department();
        $row = $dept->find($_GET['id']);

        include "views/department/form.php";
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $dept = new Department();
            $dept->update($_GET['id'], $_POST);

            header("Location: index.php?c=Department&a=index");
            exit;
        }
    }

    public function delete() {
        $dept = new Department();
        $dept->delete($_GET['id']);

        header("Location: index.php?c=Department&a=index");
    }
}
