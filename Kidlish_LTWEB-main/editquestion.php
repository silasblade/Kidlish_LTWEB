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
    $id = $_POST['id'];
    $qu = $_POST['qu'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $ar = $_POST['ar'];
    // Kiểm tra xem các trường thông tin đã được nhập đầy đủ hay chưa


        // Thực hiện truy vấn để cập nhật thông tin người dùng
        $query = "UPDATE testquestion_multichoice SET question_mc='$qu', answer_1='$a1', answer_2='$a2', answer_3='$a3', answer_4='$a4', answer_correct='$ar' WHERE id_quest=$id";
        $result = mysqli_query($conn, $query);

        // Kiểm tra xem truy vấn đã thành công hay chưa
        if ($result) {
            
            header("Location: admin21.php");
            echo "Chỉnh sửa thông tin người dùng thành công.";


        } else {
            echo "Đã xảy ra lỗi trong quá trình chỉnh sửa thông tin người dùng.";
        }

        // Đóng kết nối tới CSDL
        mysqli_close($conn);
    
?>
