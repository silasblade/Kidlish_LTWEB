<?php
// Kết nối đến cơ sở dữ liệu MySQL
$conn = mysqli_connect('localhost', 'root', '', 'kidlish');

// Kiểm tra kết nối có thành công hay không
if (!$conn) {
    die('Không thể kết nối đến cơ sở dữ liệu MySQL: ' . mysqli_connect_error());
}

// Lấy giá trị của biến id từ query string
// Thực hiện truy vấn SQL để lấy thông tin của người dùng với id tương ứng
$sql = "SELECT * FROM testquestion_multichoice";
$result = mysqli_query($conn, $sql);

// Kiểm tra kết quả truy vấn có dữ liệu hay không
if ($result->num_rows > 0) {
    // Tạo bảng HTML để chứa dữ liệu
    echo "<table>";
    echo "<tr><td>ID Question</td><td>Question</td><td>A1</td><td>A2</td><td>A3</td><td>A4</td><td>AR</td><td>Edit</td><td>Delete</td></tr>";

    // Lặp qua các bản ghi và chèn vào bảng HTML
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id_quest"] . "</td><td>" . $row["question_mc"] . "</td><td>" . $row["answer_1"] . "</td><td>" . $row["answer_2"] . "</td><td>". $row["answer_3"] . "</td><td>".$row["answer_4"] . "</td><td>".$row["answer_correct"] . "</td><td>". "<button class='edit-btn' data-id='".$row["id_quest"]."'>Edit</button>". "</td><td>". "<button class='delete-btn' data-id='".$row["id_quest"]."'>Delete</button>". "</td></tr>";
    }

    // Đóng bảng HTML
    echo "</table>";
} else {
    echo "0 results";
}

// Đóng kết nối đến cơ sở dữ liệu MySQL
mysqli_close($conn);
?>
