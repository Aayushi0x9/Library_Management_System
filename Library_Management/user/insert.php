<?php
include("../connection.php");
header("Content-Type:application/json");

@$name=$_POST['name'];
@$email=$_POST['email'];
@$psw=$_POST['password'];

   
if($name!=null&& $email != null && $psw != null){

       $sql = "INSERT INTO user (`name`,`email`,`password`) VALUES ('$name','$email','$psw' )";
       $res = mysqli_query($conn,$sql);

       if($res){
        echo "insert success";
        http_response_code(200);
       }
       else{  
       
        echo "Insert faled";
        http_response_code(400); 
       }
}else{
    
        echo "no data found";
        http_response_code(404); 
}
?>




