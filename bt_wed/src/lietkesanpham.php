<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Sản Phẩm</title>
</head>
<body>
    <h3>Danh Sách Sản Phẩm</h3>
    
    <?php
        include "connect.php";  // Kết nối cơ sở dữ liệu

        // SQL để lấy danh sách sản phẩm
        $sql = "SELECT * FROM SANPHAM";
        $result = $connect->query($sql);

        // Kiểm tra nếu có sản phẩm
        if ($result->num_rows > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn vị tính</th>
                        <th>Quốc gia sản xuất</th>
                        <th>Giá</th>
                        <th>Chức năng</th>
                    </tr>";

            // Duyệt qua các dòng kết quả và hiển thị thông tin
            while($row = $result->fetch_assoc()) {
                $masp = $row['MASP'];  // Mã sản phẩm
                echo "<tr>
                        <td>".$row['MASP']."</td>
                        <td>".$row['TENSP']."</td>
                        <td>".$row['DVT']."</td>
                        <td>".$row['NUOCSX']."</td>
                        <td>".$row['GIA']."</td>
                        <td><a href='chitietsanpham.php?MASP=$masp'>View</a></td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "Không có sản phẩm nào.";
        }

        $connect->close(); // Đóng kết nối cơ sở dữ liệu
    ?>
    
</body>
</html>
