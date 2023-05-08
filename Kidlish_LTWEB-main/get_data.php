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

// Truy vấn cơ sở dữ liệu để lấy dữ liệu
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

// Kiểm tra và xử lý kết quả trả về
if ($result->num_rows > 0) {
    // Tạo bảng HTML để chứa dữ liệu
    echo "<table>";
    echo "<tr><td>ID</td><td>Full name</td><td>Email</td><td>Account Type</td><td>Phone number</td><td>Status</td><td>Edit</td><td>Delete</td></tr>";

    // Lặp qua các bản ghi và chèn vào bảng HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_user"] . "</td><td>" . $row["fullname_user"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone_number"] . "</td><td>". $row["account_type"] . "</td><td>".$row["available"] . "</td><td>". "<button class='edit-btn' data-id='".$row["id_user"]."'>Edit</button>". "</td><td>". "<button class='delete-btn' data-id='".$row["id_user"]."'>Delete</button>". "</td></tr>";
    }

    // Đóng bảng HTML
    echo "</table>";
} else {
    echo "0 results";
}

// Đóng kết nối
$conn->close();
?>

