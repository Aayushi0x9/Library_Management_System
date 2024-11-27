<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$user_name=$_POST['user_name'];
    @$borrowed_tym=$_POST['borrowed_tym'];
    @$returned_tym=$_POST['returned_tym'];
    @$book_name=$_POST['book_name'];
    @$category=$_POST['category'];

    if($user_name !=null && $borrowed_tym!=null && $author!=null && $price!=null && $id!=null){
        $sql = "UPDATE record SET `user_name`='$user_name',`borrowed_tym`='$borrowed_tym',`returned_tym` ='$returned_tym',`book_name`='$book_name',`book_category`='$category' WHERE `id` = '$id' ";
        $res = mysqli_query($conn,$sql);  
        if($res){
            echo "update success";
            http_response_code(200);
           }
           else{  
           
            echo "update faled";
            http_response_code(400); 
           }
    }else{
        
            echo "no data found";
            http_response_code(404); 
    }
    ?>

