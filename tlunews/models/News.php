<?php
    class NewsModel{
        private $conn;
        public function __construct($db){
            $this->conn = $db;
        }
        public function getAllNews(){
            $sql = "SELECT * FROM news";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getById($id) {
            $sql = "SELECT * FROM news WHERE id = :id";
            $stmt = $db->prepare($sql);
            $stmt->execute(['id'=>$id]);
            return $stmt->fetch();
        }
        public function AddNews($title,$content,$image,$date,$category_id){
            $sql = "insert into news(title,content,image,create_at,category_id) values(:title,:content,:image,:create_at,:category_id)";
            $smt = $this->conn->prepare($sql);
            // echo(var_dump($gia));
            $smt->execute(['title' => $title,'content'=>$content,'image' =>$image,'create_at' => $date,'category_id' =>$category_id]);
            
        }
        public function DeleteNews($id){
            $sql = "delete from news where id = :id";
            $smt = $this->conn->prepare($sql);
            $smt->execute(['id' => $id]);
        }
        public function updateNews($id,$title,$content,$image,$date,$category_id){
            $sql = 'update news set title = :title,content = :content,image = :image,create_at = :create_at,category_id = :category_id where id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['title' => $title,'content'=>$content,'image' =>$image,'create_at' => $date,'category_id' =>$category_id,'id' => $id]);
        }
    }
?>