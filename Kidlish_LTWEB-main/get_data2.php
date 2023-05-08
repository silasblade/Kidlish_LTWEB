<?php
// Kết nối đến cơ sở dữ liệu MySQL
$conn = mysqli_connect('localhost', 'root', '', 'kidlish');

// Kiểm tra kết nối có thành công hay không
if (!$conn) {
    die('Không thể kết nối đến cơ sở dữ liệu MySQL: ' . mysqli_connect_error());
}

// Lấy giá trị của biến id từ query string
$id = $_POST['id'];

// Thực hiện truy vấn SQL để lấy thông tin của người dùng với id tương ứng
$sql = "SELECT * FROM user WHERE id_user = $id";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả truy vấn có dữ liệu hay không
if (mysqli_num_rows($result) > 0) {
    // Lấy dữ liệu của người dùng và trả về dưới dạng JSON
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {
    // Trả về lỗi nếu không tìm thấy người dùng với id tương ứng
    http_response_code(404);
    echo "Không tìm thấy người dùng với id là $id";
}

// Đóng kết nối đến cơ sở dữ liệu MySQL
mysqli_close($conn);
?>
