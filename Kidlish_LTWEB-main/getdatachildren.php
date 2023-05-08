<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "kidlish";

	// Tạo kết nối
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Kiểm tra kết nối
	if (!$conn) {
		die("Kết nối thất bại: " . mysqli_connect_error());
	}

	// Thực hiện truy vấn để lấy dữ liệu từ cơ sở dữ liệu
	$id = $_COOKIE["user_id"];
	$sql = "SELECT * FROM children WHERE id_user =" .$id;
	$result = mysqli_query($conn, $sql);

	$data = array();
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	}

	if (mysqli_num_rows($result) > 0) {
	// Nếu có dữ liệu thì thực hiện các thao tác tiếp theo
	} else {
		echo "Không tìm thấy dữ liệu";
	}


	// Trả về dữ liệu dưới dạng JSON
	echo json_encode($data);

	// Đóng kết nối
	mysqli_close($conn);
?>
