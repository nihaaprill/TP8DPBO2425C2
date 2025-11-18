<?php
class Lecturer {
    private $db;

    public function __construct() {
        $this->db = DB::connect();
    }

    public function all() {
        $sql = "SELECT l.*, d.name AS dept_name 
                FROM lecturers l
                LEFT JOIN department d ON l.department_id = d.id";
        return $this->db->query($sql);
    }

    public function find($id) {
        return $this->db->query("SELECT * FROM lecturers WHERE id=$id")->fetch_assoc();
    }

    public function create($data) {
        $name  = $data['name'];
        $nidn  = $data['nidn'];
        $phone = $data['phone'];
        $dept  = $data['department_id'] ?: "NULL";

        $sql = "INSERT INTO lecturers(name,nidn,phone,department_id) 
                VALUES ('$name','$nidn','$phone',$dept)";
        return $this->db->query($sql);
    }

    public function update($id, $data) {
        $name  = $data['name'];
        $nidn  = $data['nidn'];
        $phone = $data['phone'];
        $dept  = $data['department_id'] ?: "NULL";

        $sql = "UPDATE lecturers SET
                name='$name',
                nidn='$nidn',
                phone='$phone',
                department_id=$dept
                WHERE id=$id";

        return $this->db->query($sql);
    }

    public function delete($id) {
        return $this->db->query("DELETE FROM lecturers WHERE id=$id");
    }
}
