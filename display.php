<?php

include 'connect.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-color: #c9d0d4">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<h2 style="color:black; 
    font-family: 'Helvetica Neue', sans-serif; 
    font-size: 35px; 
    padding-left: 40%;
    padding-top: 50px;
    ">DataBase Display</h2>

<div class="container my-5">


    <br><br><br>

    <table class="table">
    <thead>
    <tr>

        <th scope="col">SID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Password</th>

    </tr>
    </thead>
    <tbody>

    <?php
    $sql = "SELECT * FROM crud";

    $result = mysqli_query($con,$sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $password = $row['password'];
        
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <th>'.$name.'</th>
        <th>'.$email.'</th>
        <th>'.$mobile.'</th>
        <th>'.$password.'</th>
      <th>

      <button type="submit" class="btn btn-primary"><a class="text-light" href="update.php?update='.$id.'" style="color: #fff;text-decoration: none;font-size: 14px;position:relative;font-family: "Helvetica Neue", sans-serif;font-weight: 100; line-height: 15px;">Update</a></button>

      <button type="submit" class="btn btn-danger"><a class="text-light" href="delete.php?delete='.$id.'" style="color: #fff;text-decoration: none;font-size: 14px;position:relative;font-family: "Helvetica Neue", sans-serif;font-weight: 100; line-height: 15px;">Delete</a></button>

      </td>';
  
    }
}
    ?>
        
    </tbody>
</table>

<br>
    
<div class="conta" style="padding:  0 95%; ">
<button type="submit" class="btn btn-primary"><a class="text-light" href="users.php" style="color: #fff;
    text-decoration: none;
    font-size: 15px;
    position:relative;
    font-family: 'Helvetica Neue', sans-serif;
    font-weight: 100; 
    line-height: 15px;">
        ADD
    </a></button>
</div>

</div>

    
</body>
</html>


