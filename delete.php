<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `groupe3` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo"Delete successufull";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
}
}
?>