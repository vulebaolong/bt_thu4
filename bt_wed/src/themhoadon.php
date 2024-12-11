<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Thêm Hóa Đơn</title>
    </head>
    <body>
        <h3>Thêm Hóa Đơn Cho Khách Hàng</h3>
        <form method="get" action="#">
            <label for="sohd">Số hóa đơn: </label>
            <input type="number" name="sohd" required><br><br>
            
            <label for="nghd">Ngày hóa đơn: </label>
            <input type="date" name="nghd" required><br><br>
            
            <label for="makh">Chọn khách hàng: </label>
            <select name="makh" required>
                <?php
                    include "connect.php"; // Kết nối cơ sở dữ liệu
                    $sql = "SELECT * FROM KHACHHANG";
                    $result = $connect->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='".$row['MAKH']."'>".$row['HOTEN']."</option>";
                    }
                ?>
            </select><br><br>
            
            <label for="manv">Chọn nhân viên: </label>
            <select name="manv" required>
                <?php
                    $sql = "SELECT * FROM NHANVIEN";
                    $result = $connect->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='".$row['MANV']."'>".$row['HOTEN']."</option>";
                    }
                ?>
            </select><br><br>
            
            <label for="trigia">Trị giá: </label>
            <input type="number" name="trigia" step="0.01" required><br><br>
            
            <input type="submit" name="Them" value="Thêm">
        </form>

        <?php
            if (isset($_GET['Them']) && $_GET['Them'] == "Thêm") {
                include "connect.php"; // Kết nối cơ sở dữ liệu
                
                // Lấy dữ liệu từ form
                $sohd = $_GET['sohd'];
                $nghd = $_GET['nghd'];
                $makh = $_GET['makh'];
                $manv = $_GET['manv'];
                $trigia = $_GET['trigia'];
                
                // SQL để thêm hóa đơn vào cơ sở dữ liệu
                $sql = "INSERT INTO HOADON (SOHD, NGHD, MAKH, MANV, TRIGIA)
                        VALUES ('$sohd', '$nghd', '$makh', '$manv', '$trigia')";
                
                // Thực thi truy vấn và kiểm tra kết quả
                if ($connect->query($sql) === true) {
                    echo "Thêm hóa đơn thành công!";
                } else {
                    echo "Lỗi khi thêm hóa đơn: " . $connect->error;
                }
            }
        ?>
    </body>
</html>
