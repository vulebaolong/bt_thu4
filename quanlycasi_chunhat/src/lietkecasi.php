<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include "connect.php";
            $sql = "SELECT * FROM casi";
            $results = $connect->query($sql );
            //while($rows = $results->fetch_assoc())
            echo "<table border='1' cellspacing='0' cellpadding='10px'>";
            echo "<tr><th>Mã ca sĩ</th><th>Tên ca sĩ</th></tr>";
            while($rows = $results->fetch_row())
            {
                //echo $rows['MaCaSi']." - ".$rows['TenCaSi']."<br />";
                echo "<tr>";
                    echo "<td>$rows[0]</td>";
                    echo "<td>$rows[1]</td>";           
                echo "</tr>";
            }
            echo "</table>";
            echo "Số dòng truy xuất được". $results->num_rows; 

            $connect->close();
        ?>
    </body>
</html>
