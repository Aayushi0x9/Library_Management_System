<?php

    include("../connection.php");
    header("Content-Type:application/json");

    @$id = $_POST['id'];

    if($id!=null){
        $sql = "DELETE FROM books WHERE `id` = '$id'";
        $res = mysqli_query($conn,$sql);  
        if($res){
            $msg=array("msg"=>"success DELETE");
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(200);
           
        }
        else{
            $msg=array("msg"=>"FAILED DELETE");
            echo json_encode($msg,JSON_PRETTY_PRINT);
            http_response_code(400); 
        }
    }
    else{
        $msg=array("msg"=>"FAILED");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(404); 
    }


?>

