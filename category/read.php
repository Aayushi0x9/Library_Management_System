<?php
        include("../connection.php");
        header("Content-Type:application/json");

        $sql = "SELECT * FROM category";
        $res = mysqli_query($conn,$sql);
        if ($res) {
            echo "success";
            $arr = array();
        while($row = mysqli_fetch_assoc($res)){
            $arr[] = $row;
        }

        
        }
        else{
            echo "failed";
        }
        echo json_encode($arr);

        
    ?>