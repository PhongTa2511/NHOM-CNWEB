<?php
class User
{
    private $conn;

    // Constructor nhận vào kết nối CSDL
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Hàm kiểm tra đăng nhập người dùng
    public function login($username, $password)
    {
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $stmt = $this->conn->prepare($query);
        
        // Bind giá trị
        $stmt->bindParam(':username', $username);
        
        // Thực thi truy vấn
        $stmt->execute();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                return $row; // Trả về thông tin người dùng nếu đăng nhập thành công
            }
        }

        return false; // Trả về false nếu không tìm thấy người dùng hoặc mật khẩu sai
    }

    // Hàm lấy danh sách người dùng
    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt; // Trả về tất cả người dùng
    }

    // Hàm thêm người dùng mới
    public function register($username, $password, $role)
    {
        $query = "INSERT INTO users (username, password, role) VALUES (:username, :password, :role)";
        $stmt = $this->conn->prepare($query);

        // Hash mật khẩu
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Bind giá trị
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':role', $role);

        // Thực thi và kiểm tra nếu đăng ký thành công
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Hàm lấy thông tin người dùng theo ID
    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về thông tin người dùng
    }
}
?>
