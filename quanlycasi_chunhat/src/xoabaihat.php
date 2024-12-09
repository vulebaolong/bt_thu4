<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "<form method='get' action='#'>";
                include "connect.php";
                $sql = "SELECT * FROM baihat";
                $results = $connect->query($sql );
                echo "Tên bài hát";
                echo "<select name='mabaihat'>";
                while($rows = $results->fetch_row())
                {
                    echo "<option value='$rows[0]'>$rows[1]</option>";
                }
                echo "</select><br>";                  
                echo "<input type='Submit' name='delete' value ='Delete'>";
            echo "</form>";
            
            if(isset($_GET['delete'])&&($_GET['delete']=="Delete"))
            {
                include "connect.php";
                $mabaihat = $_GET['mabaihat'];
                $str ="delete from baihat where MaBaiHat='$mabaihat'";
                if($connect->query($str)>0)
                    echo "Delete thành công";
                else
                    echo "Delete không thành công";
                $connect->close();
            }
        ?>
    </body>
</html>
