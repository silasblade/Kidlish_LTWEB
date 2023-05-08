<?php
// Thay đổi các thông tin kết nối của bạn ở đây
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

// Lấy giá trị từ các input box
$name = $_POST['name'];
$password = $_POST['password'];

// Thực hiện truy vấn MySQL
$sql = "SELECT * FROM user WHERE username='$name' AND password='$password'";
$result = $conn->query($sql);

// Kiểm tra kết quả truy vấn và xử lý nó
if ($result->num_rows > 0) {
  // Đăng nhập thành công
  $row = $result->fetch_assoc();
  $_SESSION["signin"] = true;
  $_SESSION["id"] = $row["id"];
  $id = $row["id_user"];
  setcookie("user_id", $id, time() + (86400 * 30), "/"); // Thiết lập cookie với thời gian sống 30 ngày
  header("Location: afterlogin.html"); // Chuyển hướng người dùng đến trang chủ
  exit;
} else {
  // Đăng nhập không thành công, hiển thị thông báo lỗi
  echo 
  "<script> alert('Sai tên đăng nhập hoặc mật khẩu'); </script>";
}

// Đóng kết nối
$conn->close();
?>