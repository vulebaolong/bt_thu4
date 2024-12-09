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
            echo "<form method='get' action='#'>";
                include "connect.php";
                $sql = "SELECT * FROM casi";
                $results = $connect->query($sql );
                echo "Tên ca sĩ ";
                echo "<select name='macasi'>";
                while($rows = $results->fetch_row())
                {
                    echo "<option value='$rows[0]'>$rows[1]</option>";
                }
                echo "</select><br>";    
                echo "Mã album <input type='text' name='maalbum'><br>";
                echo "Tên album <input type='text' name='tenalbum'><br>";
                echo "<input type='Submit' name='Them' value ='Thêm'>";
            echo "</form>";
            if(isset($_GET['Them'])&&($_GET['Them']=="Thêm"))
            {
                $macasi=$_GET['macasi'];
                $maalbum=$_GET['maalbum'];
                $tenalbum=$_GET['tenalbum'];
                $sql="insert into album values('$maalbum','$tenalbum','$macasi')";
                
                if($connect->query($sql)===true)
                   echo "insert thành công";
                else
                    echo "Insert không thành công";
                
            }
        ?>
    </body>
</html>
