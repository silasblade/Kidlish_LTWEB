<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kidlish";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy id của người dùng cần xóa từ tham số trên URL
$id = $_POST["id"];

// Kiểm tra xem id đó có tồn tại trong cơ sở dữ liệu hay không
$sql = "SELECT * FROM user WHERE id_user = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Nếu tồn tại, thực hiện xóa người dùng đó bằng câu lệnh SQL DELETE
    $sql = "DELETE FROM user WHERE id_user = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Người dùng đã được xóa thành công";
    } else {
        echo "Lỗi khi xóa người dùng: " . $conn->error;
    }
} else {
    echo "Người dùng không tồn tại";
}

// Đóng kết nối
$conn->close();
?>
