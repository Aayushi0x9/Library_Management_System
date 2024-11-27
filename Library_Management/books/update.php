<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$id = $_POST['id'];
    @$name=$_POST['name'];
    @$cate=$_POST['category'];
    @$author=$_POST['author'];
    @$price=$_POST['price'];
   

    if($name !=null && $cate!=null && $author!=null && $price!=null && $id!=null){
        $sql = "UPDATE books SET `name`='$name',`category`='$cate',`author` ='$author',`price`='$price' WHERE `id` = '$id' ";
        $res = mysqli_query($conn,$sql);  
        if($res){
            echo "Insert success";
            http_response_code(200);
           }
           else{  
           
            echo "Insert faled"
            http_response_code(400); 
           }
    }else{
        
            echo "no data found";
            http_response_code(404); 
    }
    ?>

