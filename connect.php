<?php



$con = new mysqli('localhost','root','','crudoperation');


if($con){
    echo '';
}else{
    die(mysqli_error($con));
}

?>

