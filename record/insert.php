<?php
include("../connection.php");
header("Content-Type:application/json");

    @$user_name=$_POST['user_name'];
    @$borrowed_tym=$_POST['borrowed_tym'];
    @$returned_tym=$_POST['returned_tym'];
    @$book_name=$_POST['book_name'];
    @$category=$_POST['category'];

if($user_name!=null&& $borrowed_tym != null&& $returned_tym != null&& $book_name!=null&& $category!=null){

       $sql = "INSERT INTO record (`user_name`,`borrowed_date`,`returned_date`,`book_name`,`book_category`) VALUES ('$user_name','$borrowed_tym','$returned_tym','$book_name','$category')";
       $res = mysqli_query($conn, $sql);

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




