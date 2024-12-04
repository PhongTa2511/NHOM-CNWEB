<?php
include_once 'db.php';

class Category {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllCategories() {
        $query = "SELECT * FROM categories";
        return $this->db->query($query);
    }
}
?>
