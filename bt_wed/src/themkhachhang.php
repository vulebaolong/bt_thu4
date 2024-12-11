<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm Khách Hàng</title>
    </head>
    <body>
        <form method="get" action="#">
            Mã khách hàng: <input type="text" name="makh" maxlength="4" required><br>
            Họ tên: <input type="text" name="hoten" maxlength="40" required><br>
            Địa chỉ: <input type="text" name="dchi" maxlength="50" required><br>
            Số điện thoại: <input type="text" name="sodt" maxlength="20" required><br>
            Ngày sinh: <input type="date" name="ngaysinh" required><br>
            <input type="submit" name="Them" value="Thêm">
        </form>
        
        <?php
            if (isset($_GET['Them']) && $_GET['Them'] == "Thêm") {
                include "connect.php"; // Kết nối cơ sở dữ liệu
                
                // Lấy dữ liệu từ form
                $makh = $_GET['makh'];
                $hoten = $_GET['hoten'];
                $dchi = $_GET['dchi'];
                $sodt = $_GET['sodt'];
                $ngaysinh = $_GET['ngaysinh'];
                
                // SQL để thêm khách hàng vào cơ sở dữ liệu
                $sql = "INSERT INTO KHACHHANG (MAKH, HOTEN, DCHI, SODT, NGSINH)
                        VALUES ('$makh', '$hoten', '$dchi', '$sodt', '$ngaysinh')";
                
                // Thực thi truy vấn và kiểm tra kết quả
                if ($connect->query($sql) === true) {
                    echo "Thêm khách hàng thành công!";
                } else {
                    echo "Lỗi khi thêm khách hàng: " . $connect->error;
                }
            }
        ?>
    </body>
</html>
