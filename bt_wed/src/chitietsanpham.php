<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông Tin Chi Tiết Sản Phẩm</title>
</head>
<body>
    <h3>Thông Tin Chi Tiết Sản Phẩm</h3>
    
    <?php
        include "connect.php";  // Kết nối cơ sở dữ liệu

        // Lấy mã sản phẩm từ URL
        if (isset($_GET['MASP'])) {
            $masp = $_GET['MASP'];

            // SQL để lấy thông tin chi tiết sản phẩm theo mã sản phẩm
            $sql = "SELECT * FROM SANPHAM WHERE MASP = '$masp'";
            $result = $connect->query($sql);

            // Nếu có sản phẩm với mã sản phẩm này
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p><strong>Mã sản phẩm:</strong> ".$row['MASP']."</p>";
                echo "<p><strong>Tên sản phẩm:</strong> ".$row['TENSP']."</p>";
                echo "<p><strong>Đơn vị tính:</strong> ".$row['DVT']."</p>";
                echo "<p><strong>Quốc gia sản xuất:</strong> ".$row['NUOCSX']."</p>";
                echo "<p><strong>Giá:</strong> ".$row['GIA']."</p>";
            } else {
                echo "<p>Sản phẩm không tồn tại.</p>";
            }
        } else {
            echo "<p>Không có mã sản phẩm.</p>";
        }

        $connect->close(); // Đóng kết nối cơ sở dữ liệu
    ?>

</body>
</html>
