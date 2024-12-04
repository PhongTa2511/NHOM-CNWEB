<?php
require_once 'models/News.php';

class NewsController {
    private $newsModel;
    private $db;

    public function __construct() {
        // Kết nối trực tiếp tới cơ sở dữ liệu
        $this->db = new mysqli("localhost", "username", "password", "TINTUC");
        if ($this->db->connect_error) {
            die("Kết nối thất bại: " . $this->db->connect_error);
        }
        
        $this->newsModel = new News($this->db);
    }

    public function detail($id) {
        $news = $this->newsModel->getNewsById($id);
        require 'views/news/detail.php';
    }
}
?>
