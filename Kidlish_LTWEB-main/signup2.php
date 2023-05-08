<?php
// Thay đổi các thông tin kết nối của bạn ở đây
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kidlish";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Lấy giá trị từ các input box
$name = $_POST['username'];
$phone = $_POST['phone'];
$password = $_POST['pass'];

// Thực hiện truy vấn MySQL
$sql = "INSERT INTO `user`(`username`, `password`,`phone_number`) VALUES ('$name','$password','$phone')";
if (mysqli_query($conn, $sql)) {
    echo "Đăng ký thành công";
} else {
    echo "Đăng ký thất bại: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>