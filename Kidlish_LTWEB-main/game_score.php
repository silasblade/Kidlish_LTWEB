<?php
// Kết nối đến cơ sở dữ liệu MySQL
$conn = mysqli_connect('localhost', 'root', '', 'kidlish');

// Kiểm tra kết nối có thành công hay không
if (!$conn) {
    die('Không thể kết nối đến cơ sở dữ liệu MySQL: ' . mysqli_connect_error());
}

// Lấy giá trị của biến id từ query string
// Thực hiện truy vấn SQL để lấy thông tin của người dùng với id tương ứng
$sql = "SELECT u.fullname_user, g.name_game, s.score 
FROM user u
JOIN scorereport s ON u.id_user = s.id_user 
JOIN game g ON s.id_game = g.id_game;
";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả truy vấn có dữ liệu hay không
if ($result->num_rows > 0) {
    // Tạo bảng HTML để chứa dữ liệu
    echo "<table>";
    echo "<tr><td>Tên người chơi</td><td>Tên game</td><td>Điểm</td></tr>";

    // Lặp qua các bản ghi và chèn vào bảng HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["fullname_user"] . "</td><td>" . $row["name_game"] . "</td><td>" . $row["score"] . "</td></tr>";
    }

    // Đóng bảng HTML
    echo "</table>";
} else {
    echo "0 results";
}

// Đóng kết nối đến cơ sở dữ liệu MySQL
mysqli_close($conn);
?>
