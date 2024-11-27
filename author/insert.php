<?php
include("../connection.php");
header("Content-Type:application/json");

    @$name=$_POST['name'];
   
if($name!=null){

       $sql = "INSERT INTO author (`name`) VALUES ('$name')";
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




