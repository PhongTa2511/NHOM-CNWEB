<?php
    class CategoryModel{
        private $conn;
        public function __construct($db){
            $this->conn = $db;
        }
        public function getAllCategories(){
            $sql = "SELECT * FROM categories";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function AddCategories($name){
            $sql = "insert into categories(Ten) values(:Ten)";
            $smt = $this->conn->prepare($sql);
            // echo(var_dump($gia));
            $smt->execute(['Ten' => $name]);
            
        }
        public function DeleteCategories($id){
            $sql = "delete from categories where id = :id";
            $smt = $this->conn->prepare($sql);
            $smt->execute(['id' => $id]);
        }
        public function updateCategories($id,$ten){
            $sql = 'update categories set Ten = :ten where id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['id'=>$id,'ten'=>$ten]);
        }
    }
?>