<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$id = $_POST['id'];
    @$name=$_POST['name'];
    @$cate=$_POST['category'];
    
    if($name !=null && $cate!=null && $id!=null){
        $sql = "UPDATE category SET `name`='$name',`bcategory`='$cate' WHERE `id` = '$id' ";
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

