<?php
include_once 'db.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function authenticate($username, $password) {
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        return $this->db->query($query, [$username, $password])->fetch();
    }
}
?>
