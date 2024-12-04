<?php

class News {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Lấy tất cả tin tức
    public function getAllNews($keyword = '') {
        $sql = "SELECT news.id, news.title, news.content, news.image, news.created_at, categories.name AS category_name
                FROM news
                JOIN categories ON news.category_id = categories.id
                WHERE news.title LIKE ? 
                ORDER BY news.created_at DESC";
        $stmt = $this->db->prepare($sql);
        $keyword = "%" . $keyword . "%";
        $stmt->bind_param("s", $keyword);
        $stmt->execute();
        $result = $stmt->get_result();
        $newsList = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $newsList;
    }

    // Lấy chi tiết tin tức theo ID
    public function getNewsById($id) {
        $sql = "SELECT news.id, news.title, news.content, news.image, news.created_at, categories.name AS category_name
                FROM news 
                JOIN categories ON news.category_id = categories.id
                WHERE news.id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $news = $result->fetch_assoc();
        $stmt->close();
        return $news;
    }
}
?>
