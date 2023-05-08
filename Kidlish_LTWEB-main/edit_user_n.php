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
// Kiểm tra xem người dùng đã submit form chỉnh sửa chưa
    // Lấy dữ liệu từ form
    $id = $_COOKIE['user_id'];
    $name = $_POST['fullname'];
    $email = $_POST['rela'];
    $phone_number = $_POST['phone'];
    $add = $_POST['adr'];
    $pass = $_POST['acc'];
    // Kiểm tra xem các trường thông tin đã được nhập đầy đủ hay chưa


        // Thực hiện truy vấn để cập nhật thông tin người dùng
        $query = "UPDATE user SET fullname_user='$name', email='$email', phone_number='$phone_number', address='$add', password='$pass' WHERE id_user=$id";
        $result = mysqli_query($conn, $query);

        // Kiểm tra xem truy vấn đã thành công hay chưa
        if ($result) {
            
            header("Location: ihtml.php");
            echo "Chỉnh sửa thông tin người dùng thành công.";


        } else {
            echo "Đã xảy ra lỗi trong quá trình chỉnh sửa thông tin người dùng.";
        }

        // Đóng kết nối tới CSDL
        mysqli_close($conn);
    
?>
