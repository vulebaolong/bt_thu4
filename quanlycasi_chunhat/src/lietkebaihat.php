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
            include "connect.php";
            $sql = "SELECT * FROM baihat";
            $results = $connect->query($sql );
            //while($rows = $results->fetch_assoc())
            echo "<table border='1' cellspacing='0' cellpadding='10px'>";
            echo "<tr><th>Mã bài hát</th><th>Tên bài hát</th><th>Chức năng</th></tr>";
            while($rows = $results->fetch_row())
            {
                //echo $rows['MaCaSi']." - ".$rows['TenCaSi']."<br />";
                echo "<tr>";
                    echo "<td>".$rows[0]."</td>";
                    echo "<td>".$rows[1]."</td>";
                    echo "<td><a href='view.php?mabaihat=$rows[0]'>View</a></td>";
                echo "</tr>";
            }
            echo "</table>";
            $connect->close();
        ?>
    </body>
</html>
