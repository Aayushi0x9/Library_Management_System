<?php
include("../connection.php");
header("Content-Type:application/json");

@$name=$_POST['name'];
@$adr=$_POST['address'];
@$contact=$_POST['contact'];

   
if($name!=null&& $adr != null && $contact != null){

       $sql = "INSERT INTO publishers (`name`,`address`,`contact`) VALUES ('$name','$adr','$contact' )";
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




