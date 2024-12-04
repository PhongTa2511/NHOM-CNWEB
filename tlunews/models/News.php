<?php
class NewsModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function deleteNews($id) {
        $sql = "DELETE FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    
    public function getAllNews() {
        $sql = "SELECT news.*, categories.name AS category_name FROM news
                LEFT JOIN categories ON news.category_id = categories.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsByID($id) {
        $sql = "SELECT * FROM news WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function addNews($title, $content, $image, $created_at, $category_id) {
        $sql = "INSERT INTO news (title, content, image, created_at, category_id) 
                VALUES (:title, :content, :image, :created_at, :category_id)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'title' => $title,
            'content' => $content,
            'image' => $image,
            'created_at' => $created_at,
            'category_id' => $category_id
        ]);
    }
}
?>