<?php
include("../connection.php");
header("Content-Type:application/json");

    @$name=$_POST['name'];
    @$cate=$_POST['category'];
    @$author=$_POST['author'];
    @$price=$_POST['price'];


if($name!=null&& $cate != null&& $author != null&& $price!=null){

       $sql = "INSERT INTO books (`name`,`category`,`author`,`price`) VALUES ('$name','$cate','$author','$price')";
       $res = mysqli_query($conn,$sql);

       if($res){
        $msg=array("msg"=>"success");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(200);
       }
       else{  
        $msg=array("msg"=>"FAILED");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(400); 
       }
}else{
    $msg=array("msg"=>"FAILED");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(404); 
}
?>




