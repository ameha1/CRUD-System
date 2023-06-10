<?php

include 'connect.php';

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = " DELETE FROM crud WHERE id = '$id' ";

    $result = mysqli_query($con,$sql);

    if($result){

        header('location:display.php');
        
    }else{
        die(mysqli_error($conn));
    }
}

?>