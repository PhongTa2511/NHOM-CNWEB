<?php
class News {
    private $dbHost = 'localhost';
    private $dbName = 'TINTUC';
    private $dbUser = 'root';
    private $dbPass = '';

    private function connect() {
        try {
            $pdo = new PDO("mysql:host={$this->dbHost};dbname={$this->dbName};charset=utf8", $this->dbUser, $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die('Lỗi kết nối CSDL: ' . $e->getMessage());
        }
    }

    public function getAllNews() {
        $pdo = $this->connect();
        $query = "SELECT news.*, categories.name AS category_name 
                  FROM news 
                  JOIN categories ON news.category_id = categories.id 
                  ORDER BY news.created_at DESC";
        return $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getNewsById($id) {
        $pdo = $this->connect();
        $query = "SELECT news.*, categories.name AS category_name 
                  FROM news 
                  JOIN categories ON news.category_id = categories.id 
                  WHERE news.id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
