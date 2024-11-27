<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$id = $_POST['id'];

    if($id!=null){

        $sql = "DELETE FROM `user` WHERE `id` = '$id'";
        $res = mysqli_query($conn, $sql); 

        if($res){
            echo "delete success";
            http_response_code(200);
           }
           else{  
           
            echo "delete faled";
            http_response_code(400); 
           }
    }else{
        
            echo "no data found";
            http_response_code(404); 
    }
    ?>

