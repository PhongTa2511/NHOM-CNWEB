<?php
class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'tlnews');
        if ($this->conn->connect_error) {
            die('Kết nối cơ sở dữ liệu thất bại: ' . $this->conn->connect_error);
        }
    }

    // Kiểm tra đăng nhập admin
    public function checkAdminLogin($username, $password)
    {
        $stmt = $this->conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Lấy danh sách admin
    public function getAllAdmins()
    {
        $result = $this->conn->query("SELECT * FROM admins");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Xóa tài khoản admin
    public function deleteAdmin($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM admins WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
    }
}
?>
