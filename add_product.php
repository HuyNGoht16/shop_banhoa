<?php
    @include 'config.php';

    session_start();
    
    $user_id = $_SESSION['user_id'];
    
    if (!isset($user_id)) {
       header('location:login.php');
    }
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Lấy thông tin sản phẩm từ biểu mẫu
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $image_name = basename($_FILES["image"]["name"]);

    // Thêm sản phẩm vào cơ sở dữ liệu
    $sql = "INSERT INTO products (name, details, price, image) VALUES ('$name', '$description', '$price', '$image_name')";
    $result = mysqli_query($conn, $sql);

    // Đóng kết nối
    mysqli_close($conn);

    // Chuyển hướng trở lại trang quản lý sản phẩm
    // header("Location: home.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm sản phẩm</title>
</head>
<body>
	<h2>Thêm sản phẩm</h2>
	<form action="add_product.php" method="post" enctype="multipart/form-data">
		<label for="name">Tên sản phẩm:</label><br>
		<input type="text" id="name" name="name"><br>
		<label for="description">details:</label><br>
		<textarea id="description" name="description"></textarea><br>
		<label for="price">Giá:</label><br>
		<input type="number" id="price" name="price"><br>
		<label for="image">Ảnh:</label><br>
		<input type="file" id="image" name="image"><br>
		<input type="submit" value="Thêm">
	</form>
</body>
</html>
