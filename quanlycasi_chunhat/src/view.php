<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $mabaihat=$_GET['mabaihat'];
            include "connect.php";
            $sql = "SELECT * FROM baihat where MaBaiHat ='$mabaihat'";
            $results = $connect->query($sql);
            $row=$results->fetch_row();
            echo "<table border='0'>";
            echo "<form method='get' action='#'>";
                echo "<tr>";
                echo "<td>Mã bài hát</td><td><input type='text' name='mabaihat' value='$mabaihat'></input></td></tr>";
                echo "<tr>";
                echo "<td>Tên bài hát</td><td> <input type='text' name='tenbaihat' value='$row[1]'></input></td></tr>";
                echo "<tr>";
                echo "<td>Thể loại </td><td><input type='text' name='theloai' value='$row[2]'></input></td></tr>";
                echo "<tr>";
                echo "<td>Mã album </td><td><input type='text' name='maalbum' value='$row[3]'></input></td></tr>";   
                echo "<tr>";
                echo "<td colspan='2' align='center'><input type='Submit' name='Update' value='Update'>";
                echo "</tr>";
            echo "</form>";
            echo "</table>";
            if(isset($_GET['Update'])&&($_GET['Update']=="Update"))
            {
                $tenbaihat=$_GET['tenbaihat'];
                $theloai=$_GET['theloai'];
                $str="update baihat set TenBaiHat='$tenbaihat', TheLoai='$theloai' where MaBaiHat='$mabaihat'";
                if($connect->query($str)>0)
                    echo "update thành công";
                else
                    echo "update không thành công";
            }
            $connect->close();
        ?>
    </body>
</html>
