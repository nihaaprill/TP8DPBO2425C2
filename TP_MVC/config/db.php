<?php
class DB {
    private static $conn;

    public static function connect() {
        if (!self::$conn) {
            self::$conn = new mysqli("localhost", "root", "", "tp_mvc25");
            if (self::$conn->connect_error) {
                die("DB Error: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
}
