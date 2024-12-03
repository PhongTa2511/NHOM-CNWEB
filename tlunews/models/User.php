<?php
    class UserModel{
        private $conn;
        public function __construct($db){
            $this->conn = $db;
        }
        public function getAllUser(){
            $sql = "SELECT * FROM users";
            $result = $this->conn->query($sql);
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function AddUser($username,$password,$role){
            $sql = "insert into users(username,password,role) values(:username,:password,:role)";
            $smt = $this->conn->prepare($sql);
            // echo(var_dump($gia));
            $smt->execute(['username' => $username,'password'=>$password,'role' =>$role]);
            
        }
        public function DeleteUser($id){
            $sql = "delete from users where id = :id";
            $smt = $this->conn->prepare($sql);
            $smt->execute(['id' => $id]);
        }
        public function updateUser($id,$username,$password){
            $sql = 'update users set username = :username, password = :password where id = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['username' => $username,'password'=>$password,'id' => $id]);
        }
    }
?>