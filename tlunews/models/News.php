<?php
include_once 'db.php';

class News {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllNews() {
        $query = "SELECT * FROM news ORDER BY created_at DESC";
        return $this->db->query($query);
    }

    public function getNewsById($id) {
        $query = "SELECT * FROM news WHERE id = ?";
        return $this->db->query($query, [$id])->fetch();
    }
}
?>
