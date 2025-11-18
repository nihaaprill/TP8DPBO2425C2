<?php
class Department {
    private $db;

    public function __construct() {
        $this->db = DB::connect();
    }

    public function all() {
        return $this->db->query("SELECT * FROM department");
    }

    public function find($id) {
        return $this->db->query("SELECT * FROM department WHERE id = $id")->fetch_assoc();
    }

    public function create($data) {
        $name = $data['name'];
        $building = $data['building'];

        $sql = "INSERT INTO department(name, building)
                VALUES('$name', '$building')";

        return $this->db->query($sql);
    }

    public function update($id, $data) {
        $name = $data['name'];
        $building = $data['building'];

        $sql = "UPDATE department
                SET name='$name', building='$building'
                WHERE id=$id";

        return $this->db->query($sql);
    }

    public function delete($id) {
        return $this->db->query("DELETE FROM department WHERE id=$id");
    }
}
