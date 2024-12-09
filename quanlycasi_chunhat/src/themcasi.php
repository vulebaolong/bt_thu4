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
        <form method="get" action="#">
            Mã ca sĩ<input type="text" name="macasi"></input><br>
            Tên ca sĩ <input type="text" name="tencasi"></input><br>
            Ngày sinh <input type="date" name="ngaysinh"></input><br>
            <input type="Submit" name="Them" value="Thêm">
        </form>
        <?php
            if(isset($_GET['Them'])&&($_GET['Them']=="Thêm"))
            {
                include "connect.php";
                $macasi=$_GET['macasi'];
                $tencasi = $_GET['tencasi'];
                $ngaysinh =$_GET['ngaysinh'];
                
                $sql="insert into casi values('$macasi','$tencasi','$ngaysinh')";
                
                if($connect->query($sql)===true)
                   echo "insert thành công";
                else
                    echo "Insert không thành công"; 
            }
        ?>
    </body>
</html>
