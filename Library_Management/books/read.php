<?php
        include("../connection.php");
        header("Content-Type:application/json");

        $sql = "SELECT * FROM books";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            // echo "success";
            $arr = array();
        while($row = mysqli_fetch_assoc($res)){
            $arr[] = $row;
        }

        echo json_encode($arr);
        http_response_code(200);
        }
        else{
            echo "failed";
        }

        
    ?>