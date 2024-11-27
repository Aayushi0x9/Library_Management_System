<?php
include("../connection.php");
header("Content-Type:application/json");

    @$name=$_POST['name'];
    @$cate=$_POST['category'];
    @$author=$_POST['author'];
    @$price=$_POST['price'];


if($name!=null&& $cate != null&& $author != null&& $price!=null){

       $sql = "INSERT INTO books (`name`,`book_category`,`author`,`price`) VALUES ('$name','$cate','$author','$price')";
       $res = mysqli_query($conn,$sql);

       if($res){
        echo "Insert success";
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




