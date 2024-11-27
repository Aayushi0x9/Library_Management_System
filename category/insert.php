<?php
include("../connection.php");
header("Content-Type:application/json");

    @$name=$_POST['name'];
    @$cate=$_POST['category'];
   
if($name!=null&& $cate != null){

       $sql = "INSERT INTO category (`name`,`bcategory`) VALUES ('$name','$cate')";
       $res = mysqli_query($conn,$sql);

       if($res){
        echo "insert success";
        http_response_code(200);
       }
       else{  
       
        echo "insert faled";
        http_response_code(400); 
       }
}else{
    
        echo "no data found";
        http_response_code(404); 
}
?>




