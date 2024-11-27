<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$id = $_POST['id'];
    @$name=$_POST['name'];
    @$email=$_POST['email'];
    @$psw=$_POST['password'];
   
    
    if($name !=null && $email!=null && $psw!=null){
        $sql = "UPDATE user SET `name`='$name',`email`='$email',`password`='$psw' WHERE `id` = '$id' ";
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

